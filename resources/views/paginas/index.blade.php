@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Bienvenid@ al sistema de control de asistencias</h1>
        <hr class="my-4">
        <p>Inicie sesion para comenzar</p>
        <a type="button" class="btn btn-success" href="{{ route('login') }}">{{ __('Iniciar sesion') }}</a>
    </div>
@endsection

