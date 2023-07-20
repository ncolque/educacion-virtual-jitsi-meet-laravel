<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Online extends Model implements Searchable
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'fecha', 'hora'
    ];

    public function getSearchResult(): SearchResult
    {
       $url = route('buscar.resultado', $this->id);

        return new SearchResult(
           $this,
           $this->title,
           $url
        );
    }
}
