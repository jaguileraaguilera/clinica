<?php 
namespace controllers;
use controllers\ErrorController;


class FrontController {
    public static function main() {
        
        function show_error() {
            $error = new ErrorController();
            $error -> index();
        }

        if (isset($_GET['controller'])) {
            $nombre_controlador = "controllers\\".$_GET['controller'].'Controller';
            if (class_exists($nombre_controlador)) {
                $controlador = new $nombre_controlador();
                if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
                    $action = $_GET['action'];
                    $controlador -> $action();
                }
                else if (!isset($_GET['controller']) && !isset($_GET['action'])) {
                    $action_default = action_default;
                    $controlador -> $action_default;
                }
            }
            else {
                show_error();
            }
        }
        else {
            show_error();
        }
    }
}