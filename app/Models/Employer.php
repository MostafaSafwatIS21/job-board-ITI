<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'company_logo',
        'company_website',
        'company_description',
        'company_email',
        'categories',
        'location',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class, 'employer_id');
    }
}
