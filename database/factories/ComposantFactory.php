<?php

namespace Database\Factories;

use App\Models\composant;
use App\Models\classroom;
use App\Models\club;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComposantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = composant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'classroom_id'=> classroom::get('id')->random(),
            'club_id'=> club::get('id')->random(),
            'created_at'=>now(),
        ];
    }
}
