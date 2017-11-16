<?php

class Parcel extends BaseController {

    const STATUS_CHECKIN = 1;
    const STATUS_CHECKOUT = 2;

    function submit() {
        $ids = $_POST['parcel_ids'];
        $ids = explode(',', $ids);
        $ids = array_map(function($x) {
            return intval($x);
        }, $ids);
        $ids = array_filter($ids);
        $ids_in = implode(',', $ids);
        $ack = $this->db->write("update parcel set parcel_status = parcel_status + 1 where parcel_id in ($ids_in)");

        return json([
            'status' => $ack ? true:false,
        ]);
    }

    function info($parcel_id) {
        $list = $this->db->read("SELECT * FROM `parcel` WHERE `parcel_id` = $parcel_id");

        if (empty($list)) {

            return json([
                'exist' => FALSE
            ]);
        }
        $parcel = $list[0];
        return json([
            'exist' => TRUE,
            'info' => $parcel
        ]);
    }

    function shelf($parcel_id) {
        $sh = ['A1', 'A2', 'A3', 'B1', 'B2'];
        $info = [
            'code' => $sh[rand(0, 4)]
        ];

        json($info);
    }

    function checkin($parcel_id) {
        $list = $this->db->read("SELECT * FROM `parcel` WHERE `parcel_id` = $parcel_id");

        if (empty($list)) {

            return json([
                'ack' => FALSE,
                'exist' => FALSE
            ]);
        }
        $parcel = $list[0];

        if ($parcel["parcel_status"] == self::STATUS_CHECKIN) {
            return json([
                'ack' => FALSE,
                'exist' => TRUE
            ]);
        }
        $in = self::STATUS_CHECKIN;

        $this->db->write("UPDATE `parcel` SET `parcel_status` = '$in' WHERE `parcel`.`parcel_id` = $parcel_id;");
        return json([
            'ack' => TRUE,
            'exist' => TRUE
        ]);
    }

    function checkout($parcel_id) {
        
    }

}
