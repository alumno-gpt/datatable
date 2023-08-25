<?php

namespace Model;

class Venta extends ActiveRecord{
    protected static $tabla = 'ventas';
    protected static $columnasDB = ['venta_fecha',,'venta_situacion'];
    protected static $idTabla = 'venta_id';

    public $venta_id;
    public $venta_fecha;
    public $venta_situacion;


    public function __construct($args = [] )
    {
        $this->venta_id = $args['venta_id'] ?? null;
        $this->venta_fecha = $args['venta_fecha'] ?? '';
        $this->venta_situacion = $args['venta_situacion'] ?? '1';
    }
}


