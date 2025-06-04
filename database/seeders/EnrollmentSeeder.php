<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\Enrollment;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $students = User::all();
        $courses = Course::all();

        foreach ($students as $student) {
            Enrollment::factory()->count(2)->create([
                'user_id' => $student->id,
                'category_id' => $courses->random()->id,
            ]);
        }
    }
}
