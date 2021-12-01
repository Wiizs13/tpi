<?php
include "src/config.php";
include "src/Structure.php";

error_reporting(E_ALL);
ini_set("display_errors", "1");

?>

<?= Structure::printHeader() ?>
<?= Structure::printNav() ?>

<?php
/****************** CONTROLADOR FRONTAL ********************/

// Definimos un controlador por defecto

$controller = DEFAULT_CONTROLLER;
// Tomamos el controlador requerido por el usuario
// En caso que no se especifique uno, utilizamos el controlador por defecto
if (!empty($_GET['controller'])) {
    $controller = $_GET['controller'];
}

// definimos una acción por defecto
$action = DEFAULT_ACTION;

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// ya tenemos el controlador y el action
// formamos el nombre del fichero que contiene nuestro controlador

$fullController = CONTROLLERS_DIR . $controller . "Controller.php";
$controller = $controller . "Controller";

// si la variable $controller es un fichero lo vamos a requerir
if (is_file($fullController)) {
    require_once($fullController);
    $printController = new $controller();
} else {
    die("<h1>Controlador no localizado - 404 Not Found</h1>");
}

// si la variable $action es una función la ejecutamos o detenemos el script
if (method_exists($printController, $action)) {
    $printController->$action();
} else {
    die("<h1>Método no definido - 404 Not Found</h1>");
}
?>

<?= Structure::printFooter() ?>