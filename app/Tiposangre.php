<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiposangre extends Model
{
    public function compatibilidad(){
        return $this->belongsToMany(Tiposangre::class);
    }
}
