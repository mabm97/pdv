<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public function usuarioHasRoles()
    {
        return $this->hasMany('App\UsuarioHasRol', 'rol_id', 'id');
    }
}
