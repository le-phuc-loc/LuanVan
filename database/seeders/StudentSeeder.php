<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'student_code' => 'B1606842',
            'full_name' => 'Trần Tấn Thanh',
            'gender' => 'Nam',
            'email' => 'thanhcnttk42@gmail.com'
        ]);

        DB::table('students')->insert([
            'student_code' => 'B1605396',
            'full_name' => 'Lê Phúc Lộc',
            'gender' => 'Nam',
            'email' => 'locb1605396@student.ctu.edu.vn'
        ]);
        $faker = Faker::create();
        for ($i = 1607100; $i <= 1607142; $i++) {
            $gender = $faker->randomElement(['Nam', 'Nữ']);
            DB::table('students')->insert([
                'student_code' => 'B' . $i,
                'full_name' => $faker->name,
                'gender' => $gender,
                'email' => $faker->unique()->freeEmail,
            ]);
        }
    }
}
