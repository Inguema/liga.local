<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = "jugadores";

    protected $fillable = ['nombre', 'apellidos', 'posicion', 'equipo_id'];

    // Relación uno a muchos inversa
    public function equipos()
    {
        return $this->belongsTo('App\Models\Equipo');
    }

    public function equipo()
    {
        return $this->hasOne('App\Models\Equipo');
    }
}
