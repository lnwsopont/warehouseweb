<?php

$router->any("/api/parcel/:any/", "api/Parcel.info");
$router->any("/api/parcel/:any/shelf", "api/Parcel.shelf");

$router->any("/api/user/:num/", "api/User.info");
$router->any("/api/user/login", "api/User.login");
$router->any("/api/user/logout", "api/User.logout");