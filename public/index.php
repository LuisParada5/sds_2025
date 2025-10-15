<?php
require_once '../core/App.php';

$app = new App();

$request = $_SERVER['REQUEST_URI'];

if ($request == '/dia1') {
    require_once '../app/controllers/Dia1Controller.php'; // <- esta es la corrección
    $controller = new Dia1Controller();
    $controller->index();
    exit;
}

// otras rutas...
?>
