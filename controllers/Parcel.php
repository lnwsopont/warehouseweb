<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Parcel
 *
 * @author Queeny
 */
class Parcel extends BaseController {

    function add() {

        if (!isEmployee()) {
            View::display('access_denied');
            exit;
        }

        $empty = 0;
        $full = 1;

        $list = $this->db->read("select * from shelf where shelf_status=$empty");

        if (isset($_POST['shelf']) && isset($_POST['cus_id']) && isset($_POST['parcel_type'])) {

            $shelf_ok = false;
            foreach ($list as $x) {
                if ($x['shelf_code'] == $_POST['shelf']) {
                    $shelf_ok = true;
                    break;
                }
            }

            $check_cus = $this->db->read("select 1 from customer where cus_id={$_POST['cus_id']}");
            $cus_ok = !empty($check_cus);

            $type_ok = in_array($_POST['parcel_type'], ['not-fragile', 'fragile']);

            if ($shelf_ok && $cus_ok && $type_ok) {
                $sql = "
                    Insert into parcel 
                    set
                        cus_id={$_POST["cus_id"]},
                        shelf_code='{$_POST["shelf"]}',
                        parcel_type='{$_POST["parcel_type"]}',
                        parcel_indate = now(),
                        emp_id_in={$_SESSION['user']['emp_id']},
                        parcel_status=1                        
                    ";
                //echo $sql;
                $this->db->write($sql);
                $parcel_id = $this->db->insertId();
                //echo $parcel_id;

                $sql = "update shelf 
                    set shelf_status=$full
                    where shelf_code = '{$_POST["shelf"]}'
                    ";
                $this->db->write($sql);

                return redirect("/parcel/$parcel_id");
            }
        } else {
            View::display('parcel_add', [
                "available_shelf" => $list
            ]);
        }
    }

    function detail($parcel_id) {
        $sql = "select * from parcel where parcel_id=$parcel_id";
        $list = $this->db->read($sql);

        $detail = [
            'parcel_id' => $list[0]['parcel_id'],
            'shelf' => $list[0]['shelf_code'],
            'qr' => "wh::" . $list[0]['parcel_id']
        ];

        View::display('parcel_detail', $detail);
    }

}
