<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_code',
        'full_name',
        'gender',
        'email',
    ];

    public function schedule_student()
    {
        return $this->hasMany('App\Models\ScheduleStudent');
    }
}
