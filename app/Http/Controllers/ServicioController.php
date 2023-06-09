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
        //Veremos que recibo el id de la especialidad
        $idEspeci = request('id');
        $servi = Servicio::where('id_especialidad',$idEspeci)->get();
        //dd($servi);
        return view('dash',compact('servi','idEspeci'));
    }
    //Muestra el formulario para llenar un servicio
    public function formAdd(){
        $formAdd="";
        return view('dash',compact('formAdd'));
    }
    //Ejecuta la adicion a la db
    public function add(Request $request){
        $servi = new Servicio;
        //Viendo el ARCHIVO la imagen del servicio
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $desti = 'img/servicio/'; //Direccion en  mi carpeta public
            $filename = time() . '-' . $file->getClientOriginalName();
            $subir = $request->file('imagen')->move($desti,$filename);
            $servi->imagen = $desti.$filename;
        }else{
            //Imagen default
            $servi->imagen = "img/icono.png";
        }
        
        $servi->nombre = $request->input('nombre');
        $servi->descripcion = $request->input('descripcion');
        $servi->costo = $request->input('costo');
        $servi->id_especialidad = $request->input('idE');
        //$servi->imagen = $request->input('imagen');
        $servi->save();
        return redirect('admin/especialidad');
    }

    public function delete(Request $request){
        $id = $request->input('id');
        $servi = Servicio::find($id);
        $servi->delete();
        return redirect('admin/especialidad');
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


        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $desti = 'img/servicio/'; //Direccion en  mi carpeta public
            $filename = time() . '-' . $file->getClientOriginalName();
            $subir = $request->file('imagen')->move($desti,$filename);
            $servi->imagen = $desti.$filename;
        }else{
            //Imagen default
            $servi->imagen = "img/icono.png";
        }


        $servi->save();
        return redirect('admin/especialidad');        
    }
}
