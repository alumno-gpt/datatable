<?php

namespace Controllers;
use Exception;
use Model\Producto;
use MVC\Router;

class ProductoController{
    public static function index(Router $router) {
        $router->render('productos/index', []);

    }

    public static function guardarApi(){
     
        try {
            $producto = new Producto($_POST);
            $resultado = $producto->crear();

            if ($resultado['resultado'] == 1) {
                echo json_encode([
                    'mensaje' => 'Registro guardado correctamente',
                    'codigo' => 1
                ]);
            } else {
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

   
    public static function buscarApi()
    {
        $producro_nombre = $_GET['producro_nombre'];
        $producto_precio = $_GET['producto_precio'];
       

        $sql = "SELECT * FROM productos where producto_situacion = 1 ";
        if ($producro_nombre != '') {
            $sql .= " and producro_nombre like '%$producro_nombre%' ";
        }

        if ($producto_precio != '') {
            $sql .= " and producto_precio like '%$producto_precio%' ";
        }
        
        
        try {
            
            $producto = Producto::fetchArray($sql);
            header('Content-Type: application/json');

            echo json_encode($producto);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

    public static function modificarApi(){
     
        try {
            $producto = new Producto($_POST);
            // $resultado = $arma->crear();

            $resultado = $producto -> actualizar();

            if ($resultado['resultado'] == 1) {
                echo json_encode([
                    'mensaje' => 'Registro modificado correctamente',
                    'codigo' => 1
                ]);
            } else {
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }


    public static function eliminarApi(){
     
        try {
            $producto_id = $_POST['producto_id'];
            $producto=  Producto::find($producto_id);
            $producto ->producto_situacion = 0;
            $resultado = $producto ->actualizar();

            if ($resultado['resultado'] == 1) {
                echo json_encode([
                    'mensaje' => 'Registro eliminado correctamente',
                    'codigo' => 1
                ]);
            } else {
                echo json_encode([
                    'mensaje' => 'Ocurrió un error',
                    'codigo' => 0
                ]);
            }
            // echo json_encode($resultado);
        } catch (Exception $e) {
            echo json_encode([
                'detalle' => $e->getMessage(),
                'mensaje' => 'Ocurrió un error',
                'codigo' => 0
            ]);
        }
    }

}
 
?>