<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nombre', 'fecha', 'estado'/* , 'horario_materia_id' */
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function online(){
        return $this->belongsTo(Online::class);
    }
}
