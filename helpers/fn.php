<?php

function json($data){
	header('Content-Type: application/json');
	echo json_encode($data);
}

function redirect($url){
    header("Location: $url");
}
