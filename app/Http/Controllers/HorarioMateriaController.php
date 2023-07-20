<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\HorarioMateria;
use App\Models\User;
use Illuminate\Http\Request;

class HorarioMateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = HorarioMateria::all();
        return view('ofertas.index', compact('ofertas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HorarioMateria  $horarioMateria
     * @return \Illuminate\Http\Response
     */
    public function show(HorarioMateria $horarioMateria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HorarioMateria  $horarioMateria
     * @return \Illuminate\Http\Response
     */
    public function edit(HorarioMateria $horarioMateria)
    {
        $estudiantes = User::where('tipo', 3)->get();
        $cursos = Curso::all();
        return view('ofertas.edit', compact('horarioMateria', 'estudiantes', 'cursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HorarioMateria  $horarioMateria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HorarioMateria $horarioMateria)
    {
        $horarioMateria->update($request->all());
        return redirect()->route('horario-materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HorarioMateria  $horarioMateria
     * @return \Illuminate\Http\Response
     */
    public function destroy(HorarioMateria $horarioMateria)
    {
        //
    }
}
