<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $table = "partidos";

    protected $fillable = ['equipo_local_id', 'equipo_visitante_id', 'marcador'];

    // Relación uno a muchos inversa
    public function equipoLocal()
    {
        return $this->belongsTo('App\Models\Equipo');
    }

    public function equipoVisitante()
    {
        return $this->belongsTo('App\Models\Equipo');
    }

}
