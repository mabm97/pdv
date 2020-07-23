<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpresaHasContacto extends Model
{
    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'empresa_id', 'id');
    }
    public function contacto()
    {
        return $this->belongsTo('App\Contacto', 'contacto_id', 'id');
    }
}
