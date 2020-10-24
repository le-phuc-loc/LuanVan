<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            'weekdays' => 'Monday',
            'period_start' => 1,
            'period_end' => 3,
            'num_periods' => 3,
            'num_weeks' => 18,
            'course_id' => 1,
        ]);

        DB::table('schedules')->insert([
            'weekdays' => 'Thursday',
            'period_start' => 6,
            'period_end' => 8,
            'num_periods' => 3,
            'num_weeks' => 18,
            'course_id' => 1,
        ]);

        DB::table('schedules')->insert([
            'weekdays' => 'Tuesday',
            'period_start' => 6,
            'period_end' => 8,
            'num_periods' => 3,
            'num_weeks' => 18,
            'course_id' => 2,
        ]);

        DB::table('schedules')->insert([
            'weekdays' => 'Friday',
            'period_start' => 1,
            'period_end' => 3,
            'num_periods' => 3,
            'num_weeks' => 18,
            'course_id' => 3,
        ]);
    }
}
