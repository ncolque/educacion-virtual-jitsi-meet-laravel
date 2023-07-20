<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Periodo extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
        'gestion_id', 'nombre', 'fecha_ini', 'fecha_fin'
    ];

    public function gestion(){
        return $this->belongsTo(Gestion::class);
    }

    public function calificaciones(){
        return $this->hasMany(Calificacion::class);
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
