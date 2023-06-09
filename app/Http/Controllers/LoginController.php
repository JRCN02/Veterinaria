<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class LoginController extends Controller
{
    public function check(){
        $credenci = request()->only('user','password'); 
        if(Auth::attempt($credenci)){
            //Para evitar clonaciones de secion con csrf
            request()->session()->regenerate();
            $user = Auth::user();
            if($user->estado == 1){
                return redirect('dash');
            }else{
                Auth::logout();
            }
        }
        return redirect('login');
    }

    public function perfil(){
        $user = Auth::user();
        $perfil="";
        return view('dash',compact('perfil','user'));
    }

    public function form(){
        $changePas="";
        return view('dash',compact('changePas'));  
    }
    public function password(Request $request){
        $IDuser = Auth::id();
        $user = User::find($IDuser);
        //recupera la contraseña
        $pass = $request->input('password');

        $isValid = Hash::check($pass,$user->password);
        if($isValid){
            $pass_new = $request->input('password-new');
            $pass_repeat = $request->input('password-repeat');
            if($pass_new === $pass_repeat && $pass_new!=""){
                $pass_new = Hash::make($pass_new);
                $user->password = $pass_new;
                $user->save();
            }
        }else{
            echo "contraseña actual invalida";
        }
    }

    public function perfilForm(){
        $user = Auth::user();
        $perfilForm="";
        return view('dash',compact('perfilForm','user'));
    }

    public function update(Request $request){
        $id = Auth::id();
        $user = User::find($id);

        $user->celular = $request->input('celular');
        $user->direccion = $request->input('direccion');

        if($request->hasFile('perfil')){
            $file = $request->file('perfil');
            $desti = 'img/perfil/'; //Direccion en  mi carpeta public
            $filename = time() . '-' . $file->getClientOriginalName();
            $subir = $request->file('perfil')->move($desti,$filename);
            $user->perfil = $desti.$filename;
        }else{
            //Imagen default
            $user->perfil = "img/perfil/perfildefault.png";
        }

        if($user->user != $request->input('user')){
            $user->user = $request->input('user');
            $user->save();
            Auth::logout();
        }
        $user->save();
        return redirect('dash');
    }
}
