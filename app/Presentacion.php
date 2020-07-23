<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    public function ventaDetalles()
    {
        return $this->hasMany('App\VentaDetalle', 'presentacion_id', 'id');
    }
    public function producto()
    {
        return $this->belongsTo('App\Producto', 'producto_id', 'id');
    }
}
