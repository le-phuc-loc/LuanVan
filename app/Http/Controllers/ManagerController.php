<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Schedule;
use App\Models\ScheduleStudent;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function course()
    {
        $courses = Course::all();

        return view('course', [
            'courses' => $courses,
        ]);
    }

    public function schedule($id)
    {
        $schedules = Schedule::where('course_id',$id)->with('course')->get();

        return view('schedule', [
            'schedules' => $schedules,
        ]);
    }

    public function list_student($id)
    {
        $list = ScheduleStudent::where('schedule_id',$id)->with('student')->get();

        return view('list_students', [
            'list' => $list,
        ]);
    }
}
