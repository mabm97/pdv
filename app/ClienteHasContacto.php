<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteHasContacto extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'cliente_id', 'id');
    }

    public function contacto()
    {
        return $this->belongsTo('App\Contacto', 'contacto_id', 'id');
    }
}
