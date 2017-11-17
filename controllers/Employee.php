<?php

class Employee extends BaseController {

    const PARCEL_STATUS_WAITING = 0;

    function receive() {

        $shelfs = $this->db->read("select * from shelf order by shelf_code");

        if (isset($_POST['cus_id']) && isset($_POST['booking_code'])) {

            $cusid = $_POST['cus_id'];
            $bookid = $_POST['booking_code'];

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
            $this->db->write("update parcel set parcel_status = 1 where parcel_id = $parcelid ");
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
