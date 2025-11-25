<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutBanner extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'is_active'
    ];
}
