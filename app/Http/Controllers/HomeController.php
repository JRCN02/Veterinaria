<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Producto;
class HomeController extends Controller
{
    public function index(){
        $service = Servicio::all();
        $product = Producto::all();

        return view('home',compact('service','product'));
    }
}
