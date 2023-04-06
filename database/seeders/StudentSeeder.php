<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'Arshad',
            'email' => 'arshu@mail.com',
            'age' => 28,
        ]);
        Student::create([
            'name' => 'Shahul',
            'email' => 'shahul@mail.com',
            'age' => 17,
        ]);
        Student::create([
            'name' => 'Anjus',
            'email' => 'anjus@mail.com',
            'age' => 31,
        ]);
        Student::create([
            'name' => 'Akil Marar',
            'email' => 'akil.marar@mail.com',
            'age' => 32,
        ]);
        Student::create([
            'name' => 'Sreelakshmi',
            'email' => 'devu@mail.com',
            'age' => 33,
        ]);
        Student::create([
            'name' => 'Junaid',
            'email' => 'jun_mnj@mail.com',
            'age' => 28,
        ]);
        Student::create([
            'name' => 'Karthika',
            'email' => 'karthu@mail.com',
            'age' => 29,
        ]);
    }
}


