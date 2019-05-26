<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencia;

class AsistenciaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistencia = Asistencia::orderBy('nombre', 'asc')->paginate(10);
        return view('asistencia.index')->with('asistencias', $asistencia);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asistencia.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        // Crear registro
        $asistencia = new Asistencia;
        $asistencia->nombre = $request->input('nombre');
        $asistencia->email = $request->input('email');
        $asistencia->asistencias = $request->input('asistencia');
        $asistencia->faltas = $request->input('falta');
        $asistencia->comentarios = $request->input('comentario');
        $asistencia->user_id = auth()->user()->id;
        $asistencia->save();

        return redirect('/asistencia')->with('success', 'Registro exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $asistencia = Asistencia::find($id);
       return view('asistencia.mostrar')->with('asistencia', $asistencia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asistencia = Asistencia::find($id);
        return view('asistencia.editar')->with('asistencia', $asistencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre' => 'required',
        ]);

        // Crear registro
        $asistencia = Asistencia::find($id);
        $asistencia->nombre = $request->input('nombre');
        $asistencia->email = $request->input('email');
        $asistencia->asistencias = $request->input('asistencia');
        $asistencia->faltas = $request->input('falta');
        $asistencia->comentarios = $request->input('comentario');
        $asistencia->user_id = auth()->user()->id;
        $asistencia->save();

        return redirect('/asistencia')->with('success', 'Registro modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $asistencia = Asistencia::find($id);
        $asistencia->delete();
        return redirect('/asistencia')->with('success', 'Registro eliminado con exito');
    }
}
