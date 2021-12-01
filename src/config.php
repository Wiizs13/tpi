<?php

// traera hasta lo que este en la carpeta antes de la del proyecto
define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/AD18005/");

// trae a los controladores
define("CONTROLLERS_DIR", $_SERVER['DOCUMENT_ROOT'] . "/AD18005/controllers/");

// controlados por defecto
define("DEFAULT_CONTROLLER", "Page");

// se le asigna una accion
define("DEFAULT_ACTION", "showHome");