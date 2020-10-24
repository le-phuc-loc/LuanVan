<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Schedule;
use App\Models\ScheduleStudent;
use Illuminate\Http\Request;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

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
        $attend = $this->getList();

        return view('list_students', [
            'list' => $list,
            'attend' => $attend
        ]);
    }

    public function getList() {
        $path = "./python/";
        $cmd = "python3 ".$path."yolo_opencv.py --image ".$path."test_24.jpg --config ".$path."yolo-obj.cfg --weights ".$path."yolo-obj_4300.weights --classes ".$path."obj.names";
        // $process = new Process(['python3', "yolo_opencv.py", "--image test_24.jpg --config yolo-obj.cfg --weights yolo-obj_4300.weights --classes obj.names"]);
        $process = Process::fromShellCommandline($cmd);
        $process->run();


        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $result = $process->getOutput();
        // dd(explode("\n", $result, -1));

        return explode("\n", $result, -1);
    }
}
