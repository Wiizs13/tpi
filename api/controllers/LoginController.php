<?php

class LoginController
{
    public static function onLogin($username, $password)
    {
        include_once "./models/Login.php";
        Login::login($username, $password);

    }

    public static function mostrarFormulario()
    {
        require_once './views/LoginView.php';
    }
}

session_start();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        LoginController::mostrarFormulario();

        break;
    case 'POST':
        LoginController::onLogin($_POST['username'], $_POST['password']);
        break;
    default:
        break;
}