<?php


//  Cargar el router antes de usarlo
require_once __DIR__ . '/../lib/Route.php';

//  Cargar controladores
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/DiaController.php';
require_once __DIR__ . '/../app/controllers/InfoController.php';
require_once __DIR__ . '/../app/controllers/VisitaController.php';

// Definir rutas
Route::get('/', [new HomeController(), 'index']);
Route::get('/dia1', fn() => (new DiaController())->mostrar(1));
Route::get('/dia2', fn() => (new DiaController())->mostrar(2));
Route::get('/dia3', fn() => (new DiaController())->mostrar(3));
Route::get('/dia4', fn() => (new DiaController())->mostrar(4));
Route::get('/dia5', fn() => (new DiaController())->mostrar(5));
Route::get('/info', [new InfoController(), 'index']);
Route::get('/visita', [new VisitaController(), 'index']);
Route::post('/visita', [new VisitaController(), 'guardar']);

Route::get('/', [new HomeController(), 'index']);
