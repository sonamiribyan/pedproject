<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $teachers = User::inRandomOrder()->take(5)->get();
        $categories = Category::all();

        foreach ($teachers as $teacher) {
            Course::factory()->count(3)->create([
                'user_id' => $teacher->id,
                'category_id' => $categories->random()->id,
            ]);
        }
    }

}
