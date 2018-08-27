<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    public function caso(){
        return $this->belongsTo(Caso::class);
    }
    public function donante(){
        return $this->belongsToMany(Donante::class);
    }
}
