<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva; //Modelo de reserva
use App\Models\User; //Usuarios reserva
use App\Models\Servicio;

class ReservaController extends Controller{
    public function form(){
        $doc = User::where('cargo','=','doctor')->get();
        return view('reservas.agendar',compact('doc'));
    }

    public function select(){
        $service = Servicio::all();
        return view('reservas.seleccionar',compact('service'));
    }
}
