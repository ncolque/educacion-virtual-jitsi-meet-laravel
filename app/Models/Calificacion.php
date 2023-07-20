<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'periodo_id', 'tipo', 'nota'
    ];

    public function periodo(){
        return $this->belongsTo(Periodo::class);
    }

    public function actividades(){
        return $this->hasMany(Actividad::class);
    }
}
