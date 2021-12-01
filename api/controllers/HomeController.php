<?php

class HomeController
{
    public static function mostrarTodos()
    {
        if ($data = @file_get_contents('../menu.json')) {
            //se decodifica
            $json = json_decode($data, true);
        }

        if ($data = @file_get_contents('../menuAdmin.json')) {
            //se decodifica
            $json2 = json_decode($data, true);
        }
        require_once "./views/HomeView.php";
    }
}


session_start();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        HomeController::mostrarTodos();

        break;
    default:
        break;
}
