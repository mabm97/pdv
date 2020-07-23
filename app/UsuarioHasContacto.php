<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioHasContacto extends Model
{
    public function contacto()
    {
        return $this->belongsTo('App\Contacto', 'contacto_id', 'id');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id', 'id');
    }
}
