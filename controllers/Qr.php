<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Qr
 *
 * @author Queeny
 */
class Qr extends BaseController{
    //put your code here
    function test(){
        
        $parcel = 1234;
        $cus = "abcd";
        
        View::display('qr_test',[
            'txt' => "wh::{$parcel}:{$cus}"
        ]);
    }
}
