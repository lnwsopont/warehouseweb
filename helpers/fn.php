<?php

function json($data){
	header('Content-Type: application/json');
	echo json_encode($data);
}

function redirect($url){
    header("Location: $url");
}

function isLogin(){
    return isset($_SESSION['user']);
}

function isEmployee(){
    return isLogin() && $_SESSION['user_type'] == 'employee';
}

function isCustomer(){
    return isLogin() && $_SESSION['user_type'] == 'customer';
}
