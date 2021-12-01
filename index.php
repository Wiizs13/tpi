<?php

error_reporting( E_ALL );
ini_set( "display_errors", "1" );

define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/AD18005");
define("CONTROLLERS_DIR", $_SERVER['DOCUMENT_ROOT'] . "/AD18005/controllers/");

//definir url para etiquetas a
define("DEFAULT_LINK", "http://localhost/AD18005");
// controlador por defecto

define("DEFAULT_CONTROLLER", "Page");
define("DEFAULT_ACTION", "showHome");
?>


<?php

$_SESSION['method'] = $_SERVER['REQUEST_METHOD'];
$uri = explode('/', $_SERVER['REQUEST_URI']);
//print_r($uri);
$controller = DEFAULT_CONTROLLER;

$_GET['controller'] = $uri[2];
if(isset($uri[3])){
    $_GET['action'] = $uri[3];
}

if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}
$action_s = DEFAULT_ACTION;

if (!empty($_GET['action'])){
    $action_s = $_GET['action'];
}

$fullController = CONTROLLERS_DIR . $controller . "Controller.php";

$controller = $controller . "Controller";


if (is_file($fullController)) {
    require_once ($fullController);
    $printController = new $controller();
}
else
{
    die("<h1>Controlador no localizado - 404 Not Found</h1>");
}

require_once "views/headerView.php";
if (method_exists($printController,$action_s)){
    $printController->$action_s();
} else{
    die("<h1>Metodo no existente.</h1>");
}
require_once "views/footerView.php";
?>