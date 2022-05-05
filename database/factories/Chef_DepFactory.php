<?php

namespace Database\Factories;

use App\Models\chef_dep;
use App\Models\department;
use Illuminate\Database\Eloquent\Factories\Factory;

class Chef_DepFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = chef_dep::class;

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
            'created_at'=>now(),
        ];
    }
}
