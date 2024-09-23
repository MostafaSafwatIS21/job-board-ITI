<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function post()
    {
        return $this->belongsTo(Post::class, 'job_id');
    }

    protected $fillable = [
        'candidate_id',
        'job_id',
        'status',
        'cover_letter',
    ];
}
