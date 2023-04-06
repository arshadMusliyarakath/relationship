<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'student_id' => 4,
            'course' => 'HTML / CSS',
            'duration' => '4 Month',
            'fee' => '4999'
        ]);
        Course::create([
            'student_id' => 6,
            'course' => 'JAVA',
            'duration' => '1 Year',
            'fee' => '17000'
        ]);
        Course::create([
            'student_id' => 2,
            'course' => 'PHP - Laravel',
            'duration' => '6 Month',
            'fee' => '6666'
        ]);
     
    }
}


// 1 -
// 2
// 3 -
// 4
// 5 -
// 6
// 7 -