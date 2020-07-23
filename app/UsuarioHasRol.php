<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuarioHasRol extends Model
{
    public function rol()
    {
        return $this->belongsTo('App\Rol', 'rol_id', 'id');
    }
    public function usuario()
    {
        return $this->belongsTo('App\Usuario', 'usuario_id', 'id');
    }
}
