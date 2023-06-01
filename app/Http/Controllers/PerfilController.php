<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerfilController extends Controller
{
    public function perfiles(){
        //Encuentra el id del usuario autentificado
        $userID = auth()->user()->id;
        //Con el valor optnido busca a todos los perfiles que hay sin contar el suyo
        $perfiles = User::whereNotIn('id',[$userID])->get();

        return view('dash',compact('perfiles'));
    }
    public function form(){
        $formUser="";
        return view('dash',compact('formUser'));
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
        $newuser->cargo = $request->input('cargo');
        $newuser->estado = 1;
        $newuser->save();
        return redirect('admin/addUser');
    }
}
