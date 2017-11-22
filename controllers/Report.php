<?php

class Report extends BaseController {

    function main() {
        View::display('employee/header', []);

        $this->parcelQuantityByMonth(11);
        $this->parcelQuantityByYear();
    }

    private function parcelQuantityByYear() {
        $listin = $this->db->read("SELECT month(parcel_indate) as m,count(*) as c FROM `parcel` WHERE parcel_status != 0 group by month(parcel_indate) order by month(parcel_indate) ");
        $listout = $this->db->read("SELECT month(parcel_outdate) as m,count(*) as c FROM `parcel` WHERE parcel_status = 3 group by month(parcel_outdate) order by month(parcel_outdate) ");

        //$months = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0];
        $months = array_fill_keys(range(1,12), 0);
        

     
        $listin = makeKeyValueArray($listin, 'm', 'c');
        $listin = $listin+$months;
        ksort($listin);
        
        $listout = makeKeyValueArray($listout, 'm', 'c');
        $listout = $listout+$months;
        ksort($listout);
       
       

        View::display('employee/report_parcel_quantity', [
            "listin" => $listin,
            "listout" => $listout,
            "id" =>"Yearcontainer"
        ]);
    }


 private function parcelQuantityByMonth($month) {
 
        
        $listin = $this->db->read("SELECT date(parcel_indate) as m,count(*) as c FROM `parcel` WHERE month(parcel_indate)=$month and parcel_status != 0 group by date(parcel_indate) order by date(parcel_indate) ");
        $listout = $this->db->read("SELECT date(parcel_outdate) as m,count(*) as c FROM `parcel` WHERE month(parcel_outdate)=$month and parcel_status = 3 group by date(parcel_outdate) order by date(parcel_outdate) ");

        //$months = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0, 8 => 0, 9 => 0, 10 => 0, 11 => 0, 12 => 0];
        $months = array_fill_keys(range(1,31), 0);
        
        
        
     
        $listin = makeKeyValueArray($listin, 'm', 'c');
        $listin = $listin+$months;
        ksort($listin);
        
        $listout = makeKeyValueArray($listout, 'm', 'c');
        $listout = $listout+$months;
        ksort($listout);
       
       

        View::display('employee/report_parcel_quantity', [
            "listin" => $listin,
            "listout" => $listout,
            "id" =>"Monthcontainer"
        ]);
    }

}

