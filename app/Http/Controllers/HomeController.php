<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
class HomeController extends Controller
{
    public function index(){
        $service = Servicio::all();
        
        return view('home',compact('service'));
    }
}
