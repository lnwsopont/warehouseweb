<?php

session_start();

if(!function_exists('login')){

    function login($email, $pwd){
        $res = sql_select("SELECT * FROM `users` WHERE user_email='$email' and user_password = '$pwd'");
        if( count($res) == 0 ){
            return false;
        }
        else{
            $_SESSION['user'] = $res[0];
            return true;
        }
    }

    function logout(){
        unset($_SESSION['user']);
    }

    function isLogin(){
        return isset($_SESSION['user']);
    }

}

 ?>
