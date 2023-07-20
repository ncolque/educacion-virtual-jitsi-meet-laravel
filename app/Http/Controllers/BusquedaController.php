<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Gestion;
use App\Models\Materia;
use App\Models\Online;
use App\Models\Periodo;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class BusquedaController extends Controller
{
    public function buscarGeneral(Request $request)
    {
        $valor = $request->input('texto');

        $searchResults = (new Search())
            ->registerModel(User::class, 'name')
            ->registerModel(Gestion::class, 'nombre')
            ->registerModel(Materia::class, 'nombre')
            ->registerModel(Curso::class, 'nombre')
            ->registerModel(Periodo::class, 'nombre')
            ->registerModel(Online::class, 'titulo')
            ->search($valor);

        return view('busqueda', compact('searchResults'));
    }
}
