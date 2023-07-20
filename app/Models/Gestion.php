<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Gestion extends Model implements Searchable
{
    use HasFactory;

    /* protected $table = 'table';
    protected $primaryKey = 'key';
    public $incrementing = false;
    public $timestamps = false; */

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public function periodos(){
        return $this->hasMany(Periodo::class);
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
