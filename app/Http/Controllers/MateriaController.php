<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMateriaRequest;
use App\Models\Horario;
use App\Models\Materia;
use App\Models\User;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::all();
        return view('materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $horarios = Horario::all();
        $profesores = User::where('tipo', 2)->get();
        return view('materias.create', compact('horarios', 'profesores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMateriaRequest $request)
    {
        $materia = Materia::create($request->all());
        $materia->horarios()->sync($request->horarios);
        return redirect()->route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit(Materia $materia)
    {
        $horarios = Horario::all();
        $profesores = User::where('tipo', 2)->get();
        return view('materias.edit', compact('materia', 'horarios', 'profesores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materia $materia)
    {
        $materia->update($request->all());
        $materia->horarios()->sync($request->horarios);
        return redirect()->route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materia $materia)
    {
        $materia->horarios()->detach();
        $materia->delete();
        return redirect()->route('materias.index');
    }
}
