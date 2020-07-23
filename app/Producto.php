<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function presentaciones()
    {
        return $this->hasMany('App\Presentacion', 'producto_id', 'id');
    }
    public function productoHasImpuestos()
    {
        return $this->hasMany('App\ProductoHasImpuesto', 'producto_id', 'id');
    }
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'empresa_id', 'id');
    }
}
