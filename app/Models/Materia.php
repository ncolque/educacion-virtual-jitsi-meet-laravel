<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Materia extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'descripcion', 'user_id'
    ];

    public function horarios(){
        return $this->belongsToMany(Horario::class, 'horario_materias')->withTimestamps();
    }

    public function user(){
        return $this->belongsTo(User::class);
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
