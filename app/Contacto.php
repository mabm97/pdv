<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    public function ClienteHasContactos()
    {
        return $this->hasMany('App\ClienteHasContacto', 'contacto_id', 'id');
    }
    public function EmpresaHasContactos()
    {
        return $this->hasMany('App\EmpresaHasContacto', 'contacto_id', 'id');
    }
    public function UsuarioHasContacto()
    {
        return $this->hasMany('App\UsuarioHasContacto', 'contacto_id', 'id');
    }
}
