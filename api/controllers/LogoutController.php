<?php

class LogoutController
{
    public static function onLogout()
    {
        $_SESSION['username'] = null;
        $_SESSION['age'] = null;
        $_SESSION['firstName'] = null;
        $_SESSION['lastName'] = null;
        $_SESSION['type'] = null;
        header("Location:Login");
    }

}

session_start();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        LogoutController::onLogout();

        break;
    default:
        break;
}