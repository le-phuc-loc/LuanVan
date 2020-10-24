<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'code' => 'CT106H',
            'course_name' => 'Mạng máy tính',
            'credit' => 3,
        ]);

        DB::table('courses')->insert([
            'code' => 'CT214H',
            'course_name' => 'Lập trình web',
            'credit' => 3,
        ]);

        DB::table('courses')->insert([
            'code' => 'CT308H',
            'course_name' => 'Thương mại điện tử',
            'credit' => 3,
        ]);
    }
}
