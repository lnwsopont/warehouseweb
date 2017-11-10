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

$router->any("/parcel/:num/", "Parcel.detail");
//$router->any("/qr", "Qr.test");
if (isCustomer()) {
    $router->any("/", "Customer.home");
    $router->any("/product", "Customer.product");
    $router->any("/history", "Customer.history");
    $router->any("/booking", "Customer.booking");
    $router->any("/order", "Customer.order");
    $router->any("/enquiry", "Customer.enquiry");
}
if (isEmployee()) {
    $router->any("/", "Employee.report");
    $router->any("/parcel/add", "Parcel.add");
    $router->any("/payment", "Employee.transaction");
    $router->any("/reply", "Employee.reply");
    $router->any("/add_cus", "Employee.addCustomer");
    $router->any("/add_emp", "Employee.addEmployee");
    $router->any("/update_emp", "Employee.updateEmployee");
}
