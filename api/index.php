<?php

error_reporting(E_ALL);
ini_set("display_errors", "1");


define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/AD18005/api/");
define("CONTROLLERS_DIR", $_SERVER['DOCUMENT_ROOT'] . "/AD18005/api/controllers/");

// controlador por defecto

define("DEFAULT_CONTROLLER", "Home");
?>


<?php

$_SESSION['method'] = $_SERVER['REQUEST_METHOD'];
$uri = explode('/', $_SERVER['REQUEST_URI']);
$controller = DEFAULT_CONTROLLER;
$_GET['controller'] = $uri[2];

if (!empty($uri[3])) {
    $_GET['id'] = $uri[3];
}


if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}

$fullController = CONTROLLERS_DIR . $controller . "Controller.php";

$controller = $controller . "Controller";


if (is_file($fullController)) {
    require_once($fullController);
    $printController = new $controller();
} else {
    die("<h1>Controlador no localizado - 404 Not Found</h1>");
}

?>