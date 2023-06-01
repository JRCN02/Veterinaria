<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Servicio;
class ServicioController extends Controller
{
    public function view(){
        $services = Servicio::get();
        return $services;
    }

    //Admin
    public function panel(){
        $servi = Servicio::get();
        return view('dash',compact('servi'));
    }
    //Muestra el formulario para llenar un servicio
    public function formAdd(){
        $formAdd="";
        return view('dash',compact('formAdd'));
    }
    //Ejecuta la adicion a la db
    public function add(Request $request){
        $servi = new Servicio;
        $servi->nombre = $request->input('nombre');
        $servi->descripcion = $request->input('descripcion');
        $servi->costo = $request->input('costo');
        //$servi->imagen = $request->input('imagen');
        $servi->save();
        return redirect('admin/servicios');
    }

    public function delete(Request $request){
        $id = $request->input('id');
        $servi = Servicio::find($id);
        $servi->delete();
        return redirect('admin/servicios');
    }

    public function formUpdate(Request $request){
        $id = $request->input('id');
        $service = Servicio::find($id);
        $update="";
        return view('dash',compact('update','service','id'));
    }

    public function update(Request $request){
        $servi = Servicio::find($request->input('id'));
        $servi->nombre = $request->input('nombre');
        $servi->descripcion = $request->input('descripcion');
        $servi->costo = $request->input('costo');
        $servi->imagen = $request->input('imagen');
        $servi->save();
        return redirect('admin/servicios');        
    }
}
