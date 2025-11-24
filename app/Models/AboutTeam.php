<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutTeam extends Model
{
    protected $fillable = [
        'name',
        'role',
        'image'
    ];
}
