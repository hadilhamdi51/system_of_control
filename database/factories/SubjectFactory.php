<?php

namespace Database\Factories;

use App\Models\subject;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'card_id' => $this->faker->sentence(),
            'acces' => $this->faker->sentence(),
            'classroom' => $this->faker->sentence(),
            'user_id'=> user::get('id')->random(),
            'created_at'=>now(),
        ];
    }
}

