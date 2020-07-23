<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoHasImpuesto extends Model
{
    public function producto()
    {
        return $this->belongsTo('App\Producto', 'producto_id', 'id');
    }
    public function impuesto()
    {
        return $this->belongsTo('App\Impuesto', 'impuesto_id', 'id');
    }
}
