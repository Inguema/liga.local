<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = "equipos";

    protected $fillable = ['nombre','club_id'];

    // Relación uno a muchos inversa
    public function clubs()
    {
        return $this->belongsTo('App\Models\Club');
    }

    // Relación uno a muchos
    public function jugadores()
    {
        return $this->hasMany('App\Models\Jugador');
    }

    // Relación uno a muchos
    public function partidosLocal()
    {
        return $this->hasMany('App\Models\Partido');
    }

    public function partidosVisitante()
    {
        return $this->hasMany('App\Models\Partido');
    }
}
