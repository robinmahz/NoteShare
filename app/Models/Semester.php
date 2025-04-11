<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use GenerateSlug;

    protected $fillable = ['name', 'slug', 'program_id'];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
