<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function usuarioHasRoles()
    {
        return $this->hasMany('App\UsuarioHasRol', 'usuario_id', 'id');
    }
    public function usuarioHasContactos()
    {
        return $this->hasMany('App\UsuarioHasContacto', 'usuario_id', 'id');
    }
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'empresa_id', 'id');
    }
}
