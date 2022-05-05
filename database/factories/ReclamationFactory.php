<?php

namespace Database\Factories;

use App\Models\reclamation;
use App\Models\composant;
use App\Models\user;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReclamationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = reclamation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => $this->faker->sentence(),
            'user_id'=> user::get('id')->rondom(),
            'composant_id'=> composant::get('id')->rondom(),
            'created_at'=>now(),
        ];
    }
}
