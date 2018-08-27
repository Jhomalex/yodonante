<?php

namespace App\Http\Controllers\Administrador;

use App\Donante;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesControllerAdmin extends Controller
{
    public function home(){
        return view('administrador.estadisticas');
    }
    
    public function donantes(){
        $donantes = Donante::all();
        return view('administrador.listaDonantes',compact('donantes'));
    }
    public function creardonante(){
        return view('administrador.crearDonante');
    }
}
