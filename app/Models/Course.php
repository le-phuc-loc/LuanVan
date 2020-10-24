<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'course_name',
        'credit',
    ];

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule');
    }
}
