<?php

function json($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
}

function redirect($url) {
    header("Location: $url");
}

function isLogin() {
    return isset($_SESSION['user']);
}

function isEmployee() {
    return isLogin() && $_SESSION['user_type'] == 'employee';
}

function isCustomer() {
    return isLogin() && $_SESSION['user_type'] == 'customer';
}

function makeKeyValueArray($arr, $key, $val) {
    $arr2 = [];
    foreach ($arr as $ech) {
        $arr2[$ech[$key]] = $ech[$val];
    }
    return $arr2;
}

function datediff($indate, $outdate) {
    $diff = abs(strtotime($indate) - strtotime($outdate));
    $days = ceil($diff / 60 / 60 / 24);
    return $days;
}

function pricecalc($indate, $outdate) {

    $price = 100;
    $days = datediff($indate, $outdate);

    return $days * $price;
}
