<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    public function distrito(){
        return $this->belongsTo(Distrito::class);
    }
    
    public function tiposangre(){
        return $this->belongsTo(Tiposangre::class);
    }
    
}
