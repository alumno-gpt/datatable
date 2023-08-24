<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\ClienteController;
use Controllers\AppController;
$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);

$router->get('/clientes', [ClienteController::class,'index']);
$router->get('/API/clientes/buscar', [ClienteController::class,'buscarApi']);
$router->post('/API/clientes/guardar', [ClienteController::class,'guardarApi']);
$router->post('/API/clientes/modificar', [ClienteController::class,'modificarApi']);
$router->post('/API/clientes/eliminar', [ClienteController::class,'eliminarApi']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
