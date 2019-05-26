@extends('layouts.app')

@section('content')
    <h1>Alumnos registrados</h1>
    @if(count($asistencias) > 0)
        @foreach($asistencias as $asistencia)
            <div class="card card-body bg-light">
                <h3><a href="/asistencia/{{$asistencia->id}}">{{$asistencia->nombre}}</a></h3>
                <small>Datos capturados el dia: {{$asistencia->created_at}}</small>
                <small>Ultima modificaion: {{$asistencia->updated_at}}</small>
            </div>
    @endforeach 
    {{$asistencias->links()}}
    @else
        <p> No existen datos registrados </p>
    @endif
@endsection