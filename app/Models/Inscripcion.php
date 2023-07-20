<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'curso_id', 'gestion_id', 'fecha'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }
}
