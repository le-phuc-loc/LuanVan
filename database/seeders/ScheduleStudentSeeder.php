<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 15; $i++) {
            DB::table('schedule_students')->insert([
                'schedule_id' => 1,
                'student_id' => $i,
            ]);
        }

        for ($i = 16; $i <= 30; $i++) {
            DB::table('schedule_students')->insert([
                'schedule_id' => 2,
                'student_id' => $i,
            ]);
        }

        for ($i = 31; $i <= 45; $i++) {
            DB::table('schedule_students')->insert([
                'schedule_id' => 3,
                'student_id' => $i,
            ]);
        }

        for ($i = 1; $i <= 15; $i++) {
            DB::table('schedule_students')->insert([
                'schedule_id' => 4,
                'student_id' => $i,
            ]);
        }
    }
}
