<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donante extends Model
{
    public function distrito(){
        return $this->belongsTo(Distrito::class);
    }
    public function tiposangre(){
        return $this->belongsTo(Tiposangre::class);
    }
    
}
