<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function clienteHasContactos()
    {
        return $this->hasMany('App\ClienteHasContacto', 'cliente_id', 'id');
    }

    public function ventas()
    {
        return $this->hasMany('App\Venta', 'cliente_id', 'id');
    }

    public function empresa()
    {
        return $this->belongsTo('App\Empresa','empresa_id','id');
    }
}
