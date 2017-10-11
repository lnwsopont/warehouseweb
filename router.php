<?php

$router->any("/api/parcel/:any/", "Parcel.info");
$router->any("/api/parcel/:any/shelf", "Parcel.shelf");

$router->any("/api/user/:num/", "User.info");
$router->any("/api/user/login", "User.login");
$router->any("/api/user/logout", "User.logout");