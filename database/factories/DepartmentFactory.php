<?php

namespace Database\Factories;

use App\Models\department;
use App\Models\chef_dep;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = department::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),  
            'chef_dep_id'=> chef_dep::get('id')->random(),
            'created_at'=>now(),
        ];
    }
}
