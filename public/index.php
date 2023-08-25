<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\ClienteController;
use Controllers\ProductoController;
use Controllers\DetalleController;
use Controllers\AppController;
$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [AppController::class,'index']);

//clientes
$router->get('/clientes', [ClienteController::class,'index']);
$router->get('/API/clientes/buscar', [ClienteController::class,'buscarApi']);
$router->post('/API/clientes/guardar', [ClienteController::class,'guardarApi']);
$router->post('/API/clientes/modificar', [ClienteController::class,'modificarApi']);
$router->post('/API/clientes/eliminar', [ClienteController::class,'eliminarApi']);

//productos
$router->get('/productos', [ProductoController::class,'index']);
$router->get('/API/productos/buscar', [ProductoController::class,'buscarApi']);
$router->post('/API/productos/guardar', [ProductoController::class,'guardarApi']);
$router->post('/API/productos/modificar', [ProductoController::class,'modificarApi']);
$router->post('/API/productos/eliminar', [ProductoController::class,'eliminarApi']);

$router->get('/productos/estadistica', [DetalleController::class,'estadistica']);
$router->get('/API/productos/estadistica', [DetalleController::class,'detalleVentasAPI']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
