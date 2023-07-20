<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Curso extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'asignacion'
    ];

    public function horario_materias(){
        return $this->hasMany(HorarioMateria::class);
    }

    public function getSearchResult(): SearchResult
    {
       $url = route('buscar.resultado', $this->id);

        return new SearchResult(
           $this,
           $this->nombre,
           $url
        );
    }
}
