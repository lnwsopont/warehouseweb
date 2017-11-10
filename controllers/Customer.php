<?php

//$router->any("/", "Customer.home");
//$router->any("/product", "Customer.product");
// $router->any("/history", "Customer.history");
// $router->any("/order", "Customer.order");
// $router->any("/enquiry", "Customer.enquiry");

class Customer extends BaseController {

    function home() {
        echo "<a href='/booking'>Booking</a>";
    }

    function product() {
        $list= $this->db->read("select * from parcel where cus_id = {$_SESSION['user']['cus_id']}");
        echo '<pre>';
        print_r($list);
    }

    function history() {
        
    }

    function booking() {

        if (isset($_POST['parcel_type']) && isset($_POST['parcel_des'])) {

            $des = $_POST['parcel_des'];
            if (strlen(trim($des)) < 3) {
                View::display('customer_booking');
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

        View::display('customer_booking');
    }

    function order() {
        
    }

    function enquiry() {
        
    }

}
