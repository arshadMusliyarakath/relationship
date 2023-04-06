<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'student_id' => 2,
            'Address_line' => 'Kalangal Flat',
            'district' => 'Malappuram',
            'place' => 'Manjeri'
        ]);

        Address::create([
            'student_id' => 5,
            'Address_line' => 'Lakshya House',
            'district' => 'Ernamkulam',
            'place' => 'Kumbalangi'
        ]);

        Address::create([
            'student_id' => 7,
            'Address_line' => 'Poonchola House',
            'district' => 'Thrissur',
            'place' => 'Vadakkanchery'
        ]);

        Address::create([
            'student_id' => 4,
            'Address_line' => 'Apple Flat',
            'district' => 'Palakkad',
            'place' => 'Ambalapuzha'
        ]);

        Address::create([
            'student_id' => 1,
            'Address_line' => 'Thammil Appartment',
            'district' => 'Malappuram',
            'place' => 'Kondotty'
        ]);

        Address::create([
            'student_id' => 3,
            'Address_line' => 'Kavitha Nivas',
            'district' => 'Trivandram',
            'place' => 'Oochil'
        ]);

        Address::create([
            'student_id' => 6,
            'Address_line' => 'Kalangal Flat',
            'district' => 'Malappuram',
            'place' => 'Manjeri'
        ]);
    }
}
