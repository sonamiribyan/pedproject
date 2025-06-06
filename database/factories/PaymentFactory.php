<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Payment;

class PaymentFactory extends Factory
{
       protected $model = Payment::class;

    public function definition(): array
    {
          return [
            'user_id' => null, // will be set in seeder or manually
            'course_id' => null, // will be set in seeder or manually
            'amount' => $this->faker->randomFloat(2, 10, 500), // payment amount between 10 and 500
            'payment_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
        ];
    }
}
