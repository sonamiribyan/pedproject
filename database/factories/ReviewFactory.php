<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
{
    return [
        'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        'course_id' => \App\Models\Course::inRandomOrder()->first()->id,
        'rating' => $this->faker->numberBetween(1, 5),
        'comment' => $this->faker->sentence(),
    ];
}

}
