<?php

class Router {

    private $route = [];
    private $controller_path = '';

    function setConteollerPath($path) {
        $this->controller_path = $path;
    }

    function any($uri, $controller) {
        $this->route[$uri] = $controller;
    }

    function run() {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = $this->explode_uri($uri);

        foreach ($this->route as $route => $controller) {
            $route = $this->explode_uri($route);

            if (count($uri) != count($route)) {
                continue;
            }

            $match = true;
            $params = [];
            for ($i = 0; $i < count($route); $i++) {
                if ($route[$i] == ':num') {
                    if (is_numeric($uri[$i])) {
                        $params[] = intval($uri[$i]);
                    } else {
                        $match = false;
                        break;
                    }
                } elseif ($route[$i] == ':any') {
                    $params[] = strval($uri[$i]);
                } elseif ($route[$i] != $uri[$i]) {
                    $match = false;
                    break;
                }
            }

            //print_r(get_defined_vars());

            if ($match) {
                $controller = explode(".", $controller);
                if (count($controller) < 2) {
                    $controller[1] = 'index';
                }
                include $this->controller_path . '/' . $controller[0] . '.php';
                $classname = $controller[0];
                $methodname = $controller[1];

                $classname = explode("/", $classname);
                $classname = array_pop($classname);

                $handler = new $classname();
                call_user_func_array([$handler, $methodname], $params);
                return true;
            }
        }
        return false;
    }

    private function explode_uri($uri) {
        $uri = explode('?', $uri)[0];
        $uri = explode("/", $uri);
        $uri = array_filter($uri);
        return array_values($uri);
    }

}
