<?php

class User extends BaseController{
    function login(){

        $username = isset($_POST['username']) ? $_POST['username'] : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;

        if($username && $password){
            $list = $this->db->read("select * from employee where emp_id = '$username' and emp_password = '$password'");
            if(count($list) == 1){
                $_SESSION['user'] = $list[0];
                $_SESSION['user_type'] = 'employee';
                unset($_SESSION['user']['emp_password']);
                redirect("/user/profile");
            }
            else{
                View::display('login', [
                    'login_fail' => true
                ]);
            }
        }
        else{
            View::display('login', [
                'login_fail' => false
            ]);
        }

    }

    function profile(){
        echo 'this is console';
    }
    
    function logout(){
        unset($_SESSION['user']);
        return redirect("/");
    }
}
