<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'job_title',
        'job_description',
        'requirements',
        'location',
        'work_type',
        'salary_range',
        'application_deadline',
        'job_category',
        'keywords',
        'status',
        'experience_level',

    ];

    public function user()
    {
        return $this->belongsTo(Employer::class, 'employer_id');
    }
}
