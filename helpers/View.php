<?php

class View {
    public static function display($view_name, $data = []){
        extract($data);
        include __DIR__ . '/../views/' . $view_name . '.php';
    }
}
