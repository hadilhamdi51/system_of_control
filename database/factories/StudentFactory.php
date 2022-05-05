<?php

namespace Database\Factories;

use App\Models\student;
use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first name' => $this->faker->word(),
            'last name' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail,
            'image'=>$this->faker->imageUrl(640,480,'animals',true),
            'department_id'=> department::get('id')->rondom(),
            'class' => $this->faker->word(),
            'state' => $this->faker->word(),
            'created_at'=>now(),
        ];
    }
}
