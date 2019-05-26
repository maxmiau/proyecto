@extends('layouts.app')

@section('content')
    <h1>Registrar nuevo alumno</h1>
    {!! Form::open(['action' => 'AsistenciaController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('nombre', 'Nombre')}}
            {{Form::text('nombre', '', ['class' => 'form-control', 'placeholder' => 'Nombre Completo'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-mail')}}
            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('asistencia', 'Numero de asistencias')}}
            {{Form::number('asistencia', '', ['class' => 'form-control', 'placeholder' => 'Asistencias', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('falta', 'Numero de faltas')}}
            {{Form::number('falta', '', ['class' => 'form-control', 'placeholder' => 'Faltas', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('comentario', 'Comentario')}}
            {{Form::textarea('comentario', '', ['class' => 'form-control', 'placeholder' => 'Comentarios adicionales'])}}
        </div>
        <br>
        {{Form::submit('Enviar', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection