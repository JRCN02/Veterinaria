<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\PerfilController;

use App\Models\Reserva;
use App\Models\Servicio;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/',[HomeController::class,'index']);


Route::post('login',[LoginController::class,'check']);
Route::view('login','login')->name('login')->middleware('guest');

Route::view('dash','dash')->middleware('auth'); //No entra si no esta authenticado



//Servicios dentro del dashboard
Route::controller(ServicioController::class)->group(function(){
  Route::get('admin/servicios','panel');
  Route::get('admin/servicios/formAdd','formAdd');
  Route::post('admin/servicios/add','add');
  Route::get('admin/servicios/delete','delete');
  Route::get('admin/servicios/formUpdate','formUpdate');
  Route::post('admin/servicios/update','update');

});


Route::get('admin/horarios',[HorarioController::class,'view']);
Route::controller(LoginController::class)->group(function(){
  Route::get('admin/perfil','perfil');
  Route::get('admin/settings','form');
  Route::post('admin/settings/update','password');
});

Route::controller(PerfilController::class)->group(function(){
  Route::get('admin/perfiles','perfiles');
  Route::get('admin/addUser','form');
  Route::post('admin/insert','add');
});


Route::get('logout',function(){
  Auth::logout();
  return redirect('/');
});


//Reserva
Route::post('form',[ReservaController::class,'form']);