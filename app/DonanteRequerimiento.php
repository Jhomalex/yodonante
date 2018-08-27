<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonanteRequerimiento extends Model
{
    public function respuesta(){
        return $this->belongsTo(Respuesta::class);
    }
    public function tipoDonanteRequerimiento(){
        return $this->belongsTo(TipoDonanteRequerimiento::class);
    }
}
