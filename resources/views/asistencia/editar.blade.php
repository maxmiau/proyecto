@extends('layouts.app')

@section('content')
    <h1>Editar Alumno registrado</h1>
    {!! Form::open(['action' => ['AsistenciaController@update', $asistencia->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('nombre', 'Nombre')}}
            {{Form::text('nombre', $asistencia->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre Completo'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-mail')}}
            {{Form::email('email', $asistencia->email, ['class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
        <div class="form-group">
            {{Form::label('asistencia', 'Numero de asistencias')}}
            {{Form::number('asistencia', $asistencia->asistencias, ['class' => 'form-control', 'placeholder' => 'Asistencias', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('falta', 'Numero de faltas')}}
            {{Form::number('falta', $asistencia->faltas, ['class' => 'form-control', 'placeholder' => 'Faltas', 'min' => '0'])}}
        </div>
        <div class="form-group">
            {{Form::label('comentario', 'Comentario')}}
            {{Form::textarea('comentario', $asistencia->comentarios, ['class' => 'form-control', 'placeholder' => 'Comentarios adicionales'])}}
        </div>
        <br>
        
        {{Form::submit('Enviar', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
    
@endsection