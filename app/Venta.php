<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function ventaDetalles()
    {
        return $this->hasMany('App\VentaDetalle', 'venta_id', 'id');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
    }
}
