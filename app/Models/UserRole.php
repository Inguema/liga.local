<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{

    protected $table = "user_role";
    const default_role_id = 2; // User role

    protected $fillable = [
        'user_id',
        'role_id',
    ];
}
