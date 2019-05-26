@extends('layouts.app')

@section('content')
    
    <h1>{{$asistencia->nombre}}</h1>
    <div>
        <h5>Contacto: {{$asistencia->email}}</h5>
        <h5>Numero de faltas: {{$asistencia->faltas}}</h5>
        <h5>Numero de asistencias: {{$asistencia->asistencias}}</h5>
        <h5>comentarios adicionales: {{$asistencia->comentarios}}</h5>
    </div>
    <br>
    <a href="/asistencia" class="btn btn-outline-primary">Regresar</a>
    <a href="/asistencia/{{$asistencia->id}}/edit" class="btn btn-outline-info">Editar</a>
    <hr>
    
    {{-- Formulario para borrar registro --}}
    {!!Form::open(['action' => ['AsistenciaController@destroy', $asistencia->id], 'method' => 'DELETE'])!!}
        {{Form::submit('Eliminar registro', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}
@endsection