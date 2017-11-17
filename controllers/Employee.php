<?php

class Employee extends BaseController {

    const PARCEL_STATUS_WAITING = 0;
    
    
    
    function editemployee(){
        
        
        $emp = $this->db->read("select * from employee");
                
              
        View::display('employee/edit_employee', [
             'emp_all' => $emp
           
        ]);
       
    }
    
    
    function editcustomers(){
        
        $cus = $this->db->read("select * from customer");
        
        
         View::display('employee/edit_customer', [
             'cus_all' => $cus
           
        ]);
}
    
    
    
    
    
    
    
    function checkout(){
        
        $parcel_all = $this->db->read("select * from parcel where parcel_status = 2");
        
        
       
         View::display('employee/checkout', [
             'parcel_all' => $parcel_all
           
        ]);
        
        
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
            $this->db->write("update shelf set shelf_code =1");
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
