<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use App\Models\Calificacion;
use App\Models\HorarioMateria;
use App\Models\User;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acts = Actividad::all();
        return view('actividades.index', compact('acts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = User::where('tipo', 3)->get();
        $cals = Calificacion::all();
        $horaMates = HorarioMateria::all();
        return view('actividades.create', compact('usuarios', 'cals', 'horaMates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Actividad::create($request->all());
        return redirect()->route('actividads.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        $usuarios = User::where('tipo', 3)->get();
        $cals = Calificacion::all();
        $horaMates = HorarioMateria::all();
        return view('actividades.edit', compact('actividad', 'usuarios', 'cals', 'horaMates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        $actividad->update($request->all());
        return redirect()->route('actividads.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividad  $actividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect()->route('actividads.index');
    }
}
