@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
        @if (@isset($perfil))
            Veterinaria
        @elseif (@isset($servi))
            Especialidad - Servicios
        @elseif(@isset($formAdd))
            - Servicios - Agregar
        @elseif(@isset($update))
            - Servicios - Modificar
        @elseif(@isset($horarioView))
            - Horario
        @elseif(@isset($especi))
            Especialidades
        @else
                        
        @endif

        
    </h1>
@stop

@section('content')
    @if (@isset($servi))
        @include('servicios.view')
    @elseif (@isset($formAdd))
        @include('servicios.formAdd')
    @elseif(@isset($update))
        @include('servicios.formUpdate')
    @elseif(@isset($horarioView))
        @include('horarios.view')
    @elseif(@isset($perfil))
        @include('usuarios.perfil')
    @elseif(@isset($perfilForm))
        @include('usuarios.form')
    @elseif(@isset($perfiles))
        @include('perfiles.view')
    @elseif(@isset($changePas))
        @include('usuarios.formPass')
    @elseif(@isset($formUser))
        @include('perfiles.form')
    @elseif(@isset($especi))
        @include('especialidades.view')
    @elseif(@isset($formE))
        @include('especialidades.form')
    @elseif(@isset($especiU))
        @include('especialidades.formUpdate')
    @else
        @include('inicio')
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop