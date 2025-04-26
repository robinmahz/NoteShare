<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $fillable = [
        'name',
        'email',
        'photo',
        'github',
        'linkedin',
        'facebook',
        'is_active',
    ];
}
