<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nombre', 'calificacion_id', 'nota', 'horario_materia_id'
    ];

    public function calificacion(){
        return $this->belongsTo(Calificacion::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function horario_materia(){
        return $this->belongsTo(HorarioMateria::class);
    }
}
