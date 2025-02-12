<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = [
            'name'=>'Chris Brown',
            'email'=>'brown@gmail.com',
            'phone'=>'01939275547',
            'address'=>'Jinda bazar, Sylhet',
            'password'=>bcrypt('12345678'),
       
        ];

        Student::query()->updateOrCreate($student);
    }
}
