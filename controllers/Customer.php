<?php
class Customer extends BaseController {
    
    
    function test(){
        
        
        
        
        View::display("/customer/home", [
           
        ]);
    }

    function home() {
        $list = $this->db->read("select * from parcel where cus_id = {$_SESSION['user']['cus_id']}");
        $cp = $pp = $bp = $fee = 0;
        foreach($list as $x){
            if($x['parcel_status']==0){
                $bp++;
            }
            elseif($x['parcel_status']==3){
                $pp++;
            }
            else{
                $cp++;
                $fee+=pricecalc($x['parcel_indate'], date('Y-m-d'));
            }
            
        }
        View::display('customer_home', [
            'notification'=>$this->get_notification_number(),
            "user" => $_SESSION['user'],
            "current_parcel" => $cp,
            "past_parcel" => $pp,
            "booking_parcel" => $bp,
            "pending_fee" => $fee
        ]);
    }

    function product() {
        $list = $this->db->read("select * from parcel where cus_id = {$_SESSION['user']['cus_id']} and parcel_status!=3 order by booking_date desc");
        View::display('customer_product', [
            'notification'=>$this->get_notification_number(),
            "parcels" => $list
        ]);
    }

    function history() {
        $list = $this->db->read("select * from parcel where cus_id = {$_SESSION['user']['cus_id']} and parcel_status=3 order by parcel_outdate desc");
        View::display('customer_history', [
            'notification'=>$this->get_notification_number(),
            "parcels" => $list
        ]);
    }

    function booking() {

        if (isset($_POST['parcel_type']) && isset($_POST['parcel_des'])) {

            $des = $_POST['parcel_des'];
            if (strlen(trim($des)) < 3) {
                View::display('customer_booking',['notification'=>$this->get_notification_number(),]);
                return;
            }

            $booking_code = str_pad(rand(1, 9999), 4, "0", STR_PAD_LEFT);
            echo $booking_code;

            $this->db->write("Insert into parcel
                set parcel_des='{$_POST['parcel_des']}',
                    cus_id = {$_SESSION['user']['cus_id']},
                    parcel_status=0,
                    parcel_type ='{$_POST['parcel_type']}',
                    booking_code = '$booking_code'
                ");

            redirect("/product");
        }

        View::display('customer_booking',['notification'=>$this->get_notification_number(),]);
    }

    function enquiry() {

        if (isset($_POST["message"])) {
            $msg = $_POST["message"];
            $this->db->write("
              Insert into private_msg 
              set 
                cus_id={$_SESSION['user']['cus_id']} , 
                msg= '$msg' , 
                sent_datetime=now(),
                status=2
              ");
        }

        $list = $this->db->read("
            select * 
            from private_msg pm left join employee e on pm.emp_id=e.emp_id
            where cus_id = {$_SESSION['user']['cus_id']} order by sent_datetime desc
            ");

        $this->db->write("Update private_msg
            set status=1 
            where cus_id = {$_SESSION['user']['cus_id']}            
            ");


        View::display("enquiry", [
            'notification'=>$this->get_notification_number(),
            "messages" => $list
        ]);
    }
    
    private function get_notification_number(){
       $list=$this->db->read("SELECT COUNT(*) as c FROM `private_msg` WHERE status=2 and emp_id !=0 and cus_id= {$_SESSION['user']['cus_id']}");
       
       return $list[0]['c'];
    }

}
