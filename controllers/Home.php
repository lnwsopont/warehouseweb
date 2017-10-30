<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Queeny
 */
class Home extends BaseController {

    function index() {
        View::display('home');
    }

}
