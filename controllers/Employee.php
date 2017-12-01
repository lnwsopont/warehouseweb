<?php

class Employee extends BaseController {

    const PARCEL_STATUS_WAITING = 0;

    function index() {

        View::display('employee/index_employee', [
        ]);
    }

    function invoice() {



        if (!isset($_POST['p'])) {
            return redirect("/parcel/checkout");
        }
        $parcel_ids = array_keys($_POST['p']);
        $list = $this->db->read("select * from parcel where parcel_id in(" . implode(",", $parcel_ids) . ")");
        $total = 0;
        foreach ($list as $parcel) {
            $total += pricecalc($parcel['parcel_indate'], $parcel['parcel_outdate']);
        }
        $this->db->write("insert into orders
            set order_datetime=now(),
            cus_id = {$parcel['cus_id']},
            emp_id = {$_SESSION['user']['emp_id']},
            price = $total,    
            payment_datetime = now()
            ");

        $order_id = $this->db->insertId();

        foreach ($list as $parcel) {

            $this->db->write("insert into orders_detail
             set orders_id = $order_id,
             parcel_id = {$parcel['parcel_id']}
                 ");
             $shelf = $parcel['shelf_code'];
             $this->db->write("update shelf set shelf_status =0 where shelf_code = '$shelf'");
        }
        $cus_info = $this->db->read("select * from customer where cus_id = {$parcel['cus_id']}");
        View::display('employee/invoice', [
            'cus_info' => $cus_info[0],
            'parcel_list' => $list,
            'order_id' => $order_id,
            'total' => $total
        ]);
    }

    function editform() {
        View::display('employee/emp_cus_edit_form', [
        ]);
    }

    function editemployee() {


        if (isset($_GET['search'])) {
            $emp = $this->db->read("select * from employee where emp_fname like '%{$_GET['search']}%' or emp_lname like '%{$_GET['search']}%'");
        } else {
            $emp = $this->db->read("select * from employee");
        }


        View::display('employee/edit_employee', [
            'emp' => $emp
        ]);
    }

    function editemployeeform($empid) {

        $success = false;
       

        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['tel']) && isset($_POST['status']) ) {
           
            if($_POST['status'] == 0){
                 $this->db->write("update employee
                set emp_fname = '{$_POST['first_name']}',
                    emp_lname = '{$_POST['last_name']}',
                    emp_tel = '{$_POST['tel']}',
                    emp_status  = {$_POST['status']},
                    left_date = now()
                where emp_id = $empid
                ");
                $success = true;
            }
           else{ $this->db->write("update employee
                set emp_fname = '{$_POST['first_name']}',
                    emp_lname = '{$_POST['last_name']}',
                    emp_tel = '{$_POST['tel']}',
                    emp_status  = {$_POST['status']},
                        left_date = NULL
                where emp_id = $empid
                ");
            $success = true;
           }
        }

        $emp = $this->db->read("select * from employee where emp_id = $empid");
        View::display('employee/edit_employee_form', [
            'emp_info' => $emp[0],
            'success' => $success
        ]);
    }

    function editcustomer() {


        if (isset($_GET['search'])) {
            $cus = $this->db->read("select * from customer where cus_fname like '%{$_GET['search']}%' or cus_lname like '%{$_GET['search']}%'");
        } 
        else {
            $cus = $this->db->read("select * from customer");
        }


        View::display('employee/edit_customer', [
            'cus' => $cus
        ]);
    }

    function editcustomerform($cusid) {

        $success = false;

        if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['tel']) && isset($_POST['email'])) {

            $this->db->write("update customer
                set cus_fname = '{$_POST['first_name']}',
                    cus_lname = '{$_POST['last_name']}',
                    cus_tel = '{$_POST['tel']}',
                    cus_email = '{$_POST['email']}'
                where cus_id = $cusid
                ");
            $success = true;
        }

        $cus = $this->db->read("select * from customer where cus_id = $cusid");
        View::display('employee/edit_customer_form', [
            'cus_info' => $cus[0],
            'success' => $success
        ]);
    }

    function addemployee() {


        View::display('employee/add_customer', [
        ]);
    }

    function checkout() {

        if (isset($_GET['cus_id'])) {
            $cusid = $_GET['cus_id'];

            $parcel_all = $this->db->read("select * from parcel where parcel_status = 3 and cus_id = $cusid and parcel_id not in (select parcel_id from orders_detail) ");



            View::display('employee/checkout', [
                'cus_id' => $cusid,
                'parcel_all' => $parcel_all
            ]);
        } else {
            View::display('employee/checkout', [
                "cus_id" => null,
                'parcel_all' => []
            ]);
        }
    }

    function receive() {

        $shelfs = $this->db->read("select * from shelf order by shelf_code");

        if (isset($_POST['cus_id']) && isset($_POST['booking_code'])) {

            $cusid = $_POST['cus_id'];
            $bookid = $_POST['booking_code'];
            $shelf = $_POST['shelf_code'];

            $list = $this->db->read("select * from parcel where cus_id = $cusid and booking_code = '$bookid'");
            if (empty($list)) {
                View::display('employee/receive', [
                    'error_msg' => 'Cannot find codes',
                    'shelfs' => $shelfs
                ]);
                return;
            }
            $parcel = $list[0];
            $parcelid = $parcel["parcel_id"];
            if ($parcel["parcel_status"] != self::PARCEL_STATUS_WAITING) {

                View::display('employee/receive', [
                    'error_msg' => 'Code Expired',
                    'shelfs' => $shelfs
                ]);
                return;
            }
            $this->db->write("update parcel set parcel_status = 1 , shelf_code = '$shelf',parcel_indate = NOW()  where parcel_id = $parcelid ");
            $this->db->write("update shelf set shelf_status =1 where shelf_code = '$shelf'");
            View::display('employee/receive', [
                'parcel_id' => $parcelid,
                'shelfs' => $shelfs
            ]);
            return;
        }



        View::display('employee/receive', [
            'shelfs' => $shelfs
        ]);
    }

}
