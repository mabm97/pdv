<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function clientes()
    {
        return $this->hasMany('App\Cliente', 'empresa_id', 'id');
    }

    public function usuarios()
    {
        return $this->hasMany('App\Usuario', 'empresa_id', 'id');
    }

    public function empresaHasContactos()
    {
        return $this->hasMany('App\EmpresaHasContacto', 'empresa_id', 'id');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto', 'empresa_id', 'id');
    }
}
