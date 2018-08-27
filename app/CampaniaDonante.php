<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaniaDonante extends Model
{
    public function tipodonantecampaniass(){
        return $this->belongsTo(Tipodonantecampania::class);
    }
    public function estadocampania(){
        return $this->belongsTo(Estadocampania::class);
    }
}
