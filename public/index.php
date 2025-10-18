<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cargar el autoloader
require_once __DIR__ . '/../autoloader.php';

// Cargar las rutas
require_once __DIR__ . '/../routes/web.php';

// Ejecutar el router
Route::dispatch();
