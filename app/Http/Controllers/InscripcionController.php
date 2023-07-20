<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Gestion;
use App\Models\Inscripcion;
use App\Models\User;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscris = Inscripcion::all();
        return view('inscripciones.index', compact('inscris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::where('tipo', 3)->get();
        $cursos = Curso::all();
        $gestiones = Gestion::all();
        return view('inscripciones.create', compact('usuarios', 'cursos', 'gestiones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inscripcion::create($request->all());
        return redirect()->route('inscripcions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function show(Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function edit(Inscripcion $inscripcion)
    {
        $usuarios = User::where('tipo', 3)->get();
        $cursos = Curso::all();
        $gestiones = Gestion::all();
        return view('inscripciones.edit', compact('usuarios', 'cursos', 'gestiones', 'inscripcion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcion $inscripcion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inscripcion  $inscripcion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscripcion $inscripcion)
    {
        $inscripcion->delete();
        return redirect()->route('inscripcions.index');
    }
}
