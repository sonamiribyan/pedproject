<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $courses = Course::all();

        foreach ($courses as $course) {
            $randomUser = $users->random();

            Review::factory()->create([
                'user_id' => $randomUser->id,
                'course_id' => $course->id,
            ]);
        }
    }
}
