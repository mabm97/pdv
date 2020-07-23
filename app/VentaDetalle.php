<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    public function venta()
    {
        return $this->belongsTo('App\Venta', 'venta_id', 'id');
    }
    public function ventaDetalle()
    {
        return $this->hasOne('App\Presentacion', 'presentacion_id', 'id');
    }
}
