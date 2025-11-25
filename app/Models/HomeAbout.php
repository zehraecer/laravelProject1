<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    protected $fillable = [
        'image',
        'text',
        'is_active'

    ];
}
