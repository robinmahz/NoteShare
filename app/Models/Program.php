<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use GenerateSlug;

    protected $fillable = ['name', 'short', 'slug'];

    public function semesters()
    {
        return $this->hasMany(Semester::class);
    }
}
