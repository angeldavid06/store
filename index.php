<?php
    require_once 'autoload.php';

    if (isset($_GET['controller']) && class_exists($_GET['controller'])) {
            $nombre_controlador = $_GET['controller'];
            $controlador = new $nombre_controlador();
        if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])) {
            $action = $_GET['action'];
            $controlador->$action();
        } else {
            require_once 'login.php';
        }   
    } else {
        require_once 'login.php';
    }
?>