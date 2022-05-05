<?php

namespace Database\Factories;

use App\Models\admin;
use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = admin::class;

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
            'created_at'=>now(),
        ];
    }
}
