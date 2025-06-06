<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Enrollment;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Enrollment::class;

    public function definition(): array
    {
        return [
            'user_id' => null, // student
            'category_id' => null,
            'enrolled_at' => now(),
        ];
    }
}
