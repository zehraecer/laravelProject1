<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeBox extends Model
{
    protected $fillable = [
        'icon',
        'title',
        'text'
    ];
}
