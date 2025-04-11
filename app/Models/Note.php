<?php

namespace App\Models;

use App\Traits\GenerateSlug;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use GenerateSlug;

    protected $fillable = ['name', 'slug', 'file', 'show', 'status', 'subject_id', 'email'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
