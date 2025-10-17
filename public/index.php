<?php
require_once '../core/App.php';

$app = new App();

$request = $_SERVER['REQUEST_URI'];

if ($request == '/dia1') {
    require_once '../app/controllers/Dia1Controller.php'; 
    $controller = new Dia1Controller();
    $controller->index();
    exit;
}
// Ruta para el Día 2
if ($request == '/dia2') {
    require_once '../app/controllers/Dia2Controller.php'; 
    $controller = new Dia2Controller();
    $controller->index();
    exit;
}

//ruta para el dia  4
if ($request == '/dia4') {
    require_once '../app/controllers/Dia4Controller.php'; 
    $controller = new Dia4Controller();
    $controller->index();
    exit;
}
// otras rutas...
?>
