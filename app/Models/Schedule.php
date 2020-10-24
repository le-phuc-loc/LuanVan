<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'weekdays',
        'period_start',
        'period_end',
        'num_periods',
        'num_weeks',
        'course_id',
    ];

    public function schedule_student()
    {
        return $this->hasMany('App\Models\ScheduleStudent');
    }

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_id');
    }
}
