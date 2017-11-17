<?php

class User extends BaseController {
    const STATUS_INACTIVE = 0;
    function login() {
        $id = $_POST['id'];
        $pin = $_POST['pin'];
        $user = $this->getInfo($id);
        if(is_null($user)|| $user['emp_password']!=$pin)
        {
            json([
                'login'=> FALSE,
                'info' => 'user or password incorrect'
            ]);
        }
         if($user['emp_status']== self ::STATUS_INACTIVE)
        {
            json([
                'login'=> FALSE,
                'info' => 'user is inactive'
            ]);
        }
        unset($user['emp_password']);
        unset($user['emp_status']);
        return json([
            'login' => TRUE,
            'info' => $user
        ]);

    }

    function logout() {
        
    }

    function info($id) {
       $user = $this->getInfo($id);
       if(is_null($user)){
           return json([
               'exist' => FALSE
           ]);
       }
        unset($user['emp_password']);
        unset($user['emp_status']);
       return json([
           'exist' => TRUE,
           'info' => $user
       ]);
    }

    private function getInfo($id) {
        
       $list = $this->db->read("SELECT * FROM `employee` WHERE `emp_id` = $id");
       if(empty($list))
       {
           return null;
       }
        return $list[0];
    }

    function changePin() {
        
    }
    
    function task(){
        return json([
            'tasks' => [
                [
                    'id' => 12,
                    'desc' => 'Parcel ID: 999 @Shelf A4'
                ],
                [
                    'id' => 123,
                    'desc' => 'Parcel ID: 997 @Shelf A5'
                ],
                [
                    'id' => 1234,
                    'desc' => 'Parcel ID: 996 @Shelf A6'
                ],
                [
                    'id' => 12345,
                    'desc' => 'Parcel ID: 998 @Shelf A7'
                ],
            ]
        ]);
    }

}
