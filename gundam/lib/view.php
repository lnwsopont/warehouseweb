<?php

function loadView($view_name, $params = []){
    extract($params);
    include 'view/' . $view_name . '.view.php';
}

?>
