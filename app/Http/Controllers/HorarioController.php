<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function view(){
        $horarioView="";
        return view('dash',compact('horarioView'));
    }
}
