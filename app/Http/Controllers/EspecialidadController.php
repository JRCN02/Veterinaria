<?php

namespace App\Http\Controllers;

use App\Models\especialidad;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class EspecialidadController extends Controller
{
    public function view(){
        $especi = especialidad::get();
        return view('dash',compact('especi'));
    }
    public function form(){
        $formE = "";
       
        return view('dash',compact('formE'));
    }
    public function formUp(){
        $id = $_GET['id'];
        $especiU = especialidad::find($id);
        return view('dash',compact('especiU'));
    }

    public function add(Request $request){
        $especi = new especialidad;
        $especi->nombre = $request->input('nombre');
        $especi->save();
        return redirect('admin/especialidad');
    }
    public function delete(){
        $id = $_GET['id'];
        $especi = especialidad::find($id);
        $especi->delete();
        return redirect('admin/especialidad');
    }
    public function update(Request $request){
        $id = $request->input('id');
        
        $especi = Especialidad::find($id);
        $especi->nombre = $request->input('nombre');
        $especi->save();
        return redirect('admin/especialidad');
    }
}
