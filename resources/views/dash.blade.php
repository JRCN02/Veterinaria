@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
        @if (!@isset($perfil))
            Veterinaria
        @endif
        @if (@isset($servi))
            - Servicios
        @endif
        @if(@isset($formAdd))
            - Servicios - Agregar
        @endif
        @if(@isset($update))
            - Servicios - Modificar
        @endif

        @if(@isset($horarioView))
            - Horario
        @endif

        
    </h1>
@stop

@section('content')
    @if (@isset($servi))
        @include('servicios.view');
    @endif
    @if (@isset($formAdd))
        @include('servicios.formAdd');
    @endif
    @if(@isset($update))
        @include('servicios.formUpdate');
    @endif
    @if(@isset($horarioView))
        @include('horarios.view');
    @endif
    @if(@isset($perfil))
        @include('usuarios.perfil')
    @endif
    @if(@isset($perfiles))
        @include('perfiles.view');
    @endif
    @if(@isset($changePas))
        @include('usuarios.formPass');
    @endif
    @if(@isset($formUser))
        @include('perfiles.form');
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop