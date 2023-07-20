<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorarioMateria extends Model
{
    use HasFactory;

    protected $table = 'horario_materias';

    protected $fillable = [
        'horario_id', 'materia_id', 'dia', 'user_id', 'curso_id'
    ];

    public function materia(){
        return $this->belongsTo(Materia::class);
    }

    public function horario(){
        return $this->belongsTo(Horario::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function actividades(){
        return $this->hasMany(Actividad::class);
    }
}
