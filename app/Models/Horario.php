<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    protected $fillable = [
        'hora_inicio', 'hora_fin'
    ];

    /* protected $casts = [
        'hora_inicio'   => 'datetime',
        'hora_fin'      => 'datetime',
    ]; */

    public function materias(){
        return $this->belongsToMany(Materia::class, 'horario_materias')->withTimestamps();
    }
}
