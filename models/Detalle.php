<?php

namespace Model;

class Detalle extends ActiveRecord{
    protected static $tabla = 'detalle_ventas';
    protected static $columnasDB = ['detalle_ventas','detalle_producto','detalle_cantidad', 'detalle_situacion'];
    protected static $idTabla = 'detalle_id';

    public $detalle_id;
    public $detalle_ventas;
    public $detalle_producto;
    public $detalle_cantidad;
    public $detalle_situacion;


    public function __construct($args = [] )
    {
        $this->detalle_id = $args['detalle_id'] ?? null;
        $this->detalle_ventas = $args['detalle_ventas'] ?? '';
        $this->detalle_producto = $args['detalle_producto'] ?? '';
        $this->detalle_cantidad = $args['detalle_cantidad'] ?? '';
        $this->detalle_situacion = $args['detalle_situacion'] ?? '1';
    }
}
