<?php

$router->any("/api/parcel/:any/", "api/Parcel.info");
$router->any("/api/parcel/:any/shelf", "api/Parcel.shelf");
$router->any("/api/parcel/:any/checkin", "api/Parcel.checkin");
$router->any("/api/parcel/:any/checkout", "api/Parcel.checkout");

$router->any("/api/user/:num/", "api/User.info");
$router->any("/api/user/login", "api/User.login");
$router->any("/api/user/logout", "api/User.logout");


$router->any("/", "Home.index");
$router->any("/login", "User.login");
$router->any("/logout", "User.logout");
$router->any("/user/profile", "User.profile");
$router->any("/parcel/add", "Parcel.add");
$router->any("/parcel/:num/", "Parcel.detail");
//$router->any("/qr", "Qr.test");
