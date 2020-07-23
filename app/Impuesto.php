<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuesto extends Model
{
    public function productoHasImpuestos()
    {
        return $this->hasMany('App\ProductoHasImpuesto', 'producto_id', 'id');
    }
}
