<?php

namespace Database\Factories;

use App\Models\session;
use App\Models\subject;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = session::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'subject_id'=> subject::get('id')->rondom(),
            'user_id'=> user::get('id')->rondom(),
            'created_at'=>now(),
        ];
    }
}
