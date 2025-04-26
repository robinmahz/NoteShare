<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use GenerateSlug;

    protected $fillable = ['name', 'slug', 'semester_id'];

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
