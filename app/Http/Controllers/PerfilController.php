<?php

namespace App\Http\Controllers;

use App\Models\especialidad;
use App\Models\User;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public  function perfiles(){
        //Encuentra el id del usuario autentificado
        $userID = auth()->user()->id;
        //Con el valor optnido busca a todos los perfiles que hay sin contar el suyo
        $perfiles = User::whereNotIn('id',[$userID])->get();

        return view('dash',compact('perfiles'));
    }
    public function form(){
        $formUser="";
        $esp = especialidad::get();
        $rol = role::get();

        return view('dash',compact('formUser','esp','rol'));
    }

    public function add(Request $request){
        $newuser = new User();
        $newuser->nombre = $request->input('nombre');
        $newuser->apellido = $request->input('apellido');
        $newuser->ci = $request->input('ci');
        $newuser->user = $request->input('user');
        $newuser->password = Hash::make($request->input('password'));
        $newuser->direccion = $request->input('direccion');
        $newuser->celular = $request->input('celular');
        $newuser->email = $request->input('email');
        $newuser->fNacimiento = $request->input('fNacimiento');
        $newuser->estado = 1;

        //Nuevos campos añadidos
        $newuser->especialidad = $request->input('especialidad');
        $newuser->perfil = 'img/perfil/perfildefault.png'; //Perfil default para todos los nuevos usuarios
        $newuser->save();
        $newuser->assignRole($request->input('rol'));

        return redirect('admin/perfiles');

    }

    
    //Este metodo se escarga de bloquear a un usuario
    public function lock(){
        $user = User::find($_GET['id']);
        
        if($user->estado == 1){
            $user->estado = 0;
        }else{
            $user->estado = 1;
        }
        $user->save();
        
        return redirect('admin/perfiles');
    }

    //Elimina un usuario
    public function delete(){
        $user = User::find($_GET['id']);
        $user->delete();
        return redirect('admin/perfiles');
    }
}
