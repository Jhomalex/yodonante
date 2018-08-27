<?php

namespace App\Http\Controllers;

use App\Caso;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $posts = Caso::all();
        return view('appweb.pagprincipal',compact('posts'));
    }

    public function caso(){
        return view('appweb.casos');
    }
}
