<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Course;
use App\Models\EnrollmentCompletion;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
     
        Student::factory()->count(10)->create();
        Course::factory()->count(5)->create();
        EnrollmentCompletion::factory()->count(15)->create();
        EnrollmentCompletion::factory()->count(15)->completed()->create();
       
          
    }
}
