<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campania extends Model
{
    public function donante(){
        return $this->belongsToMany(Donante::class);
    }
}
