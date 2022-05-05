<?php

namespace Database\Factories;

use App\Models\classroom;
use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClassroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = classroom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            ' name' => $this->faker->word(),
            'department_id'=> department::get('id')->rondom(),
            'created_at'=>now(),
        ];
    }
}
