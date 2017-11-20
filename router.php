<?php
$router->any("/api/parcel/submit/", "api/Parcel.submit");
$router->any("/api/parcel/:any/", "api/Parcel.info");
$router->any("/api/parcel/:any/shelf", "api/Parcel.shelf");
$router->any("/api/parcel/:any/checkin", "api/Parcel.checkin");
$router->any("/api/parcel/:any/checkout", "api/Parcel.checkout");

$router->any("/api/user/:num/", "api/User.info");
$router->any("/api/user/login", "api/User.login");
$router->any("/api/user/logout", "api/User.logout");
$router->any("api/user/task","api/User.task");

$router->any("/", "Web.index");
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
    //$router->any("/", "Employee.report");
    $router->any("/parcel/receive", "Employee.receive");
    $router->any("/edit/form", "Employee.editform");
    $router->any("/edit/employee", "Employee.editemployee");
    $router->any("/edit/customer", "Employee.editcustomer");
    $router->any("/parcel/checkout", "Employee.checkout");
    $router->any("/add/employee","Employee.addemployee");
    $router->any("/payment", "Employee.transaction");
    $router->any("/reply", "Employee.reply");
    $router->any("/add_cus", "Employee.addCustomer");
    $router->any("/add_emp", "Employee.addEmployee");
    $router->any("/update_emp", "Employee.updateEmployee");
}

$router->any("/admin","admin/Admin.index");
