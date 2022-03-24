<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    public function users()
    {
        return $this->belongsTo('\App\Models\User', 'user_role', 'role_id', 'user_id');
    }
}
