<?php

namespace Controllers;
use Exception;
use Model\Detalle;
use MVC\Router;

class DetalleController{
    public static function estadistica(Router $router) {
        $router->render('productos/estadistica', []);

    }
    public static function detalleVentasAPI() {

        $sql = "SELECT producto_nombre as producto, sum (detalle_cantidad) as cantidad  
        from detalle_ventas inner join ventas on detalle_venta = venta_id inner join productos on detalle_producto = producto_id 
        where detalle_situacion = 1  group by producto_nombre order by producto_nombre";

        try {

            $productos = Detalle::fetchArray($sql);

            echo json_encode($productos);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

}