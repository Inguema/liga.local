<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $table = "clubs";

    protected $fillable = ['nombre'];

    // Relación uno a muchos
    public function equipos()
    {
        return $this->hasMany('App\Models\Equipo');
    }

}
