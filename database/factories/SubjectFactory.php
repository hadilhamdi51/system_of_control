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
          
                'name' => $this->faker->word(),
                'user_id'=> user::get('id')->rondom(),
                'created_at'=>now(),
                
                
            
        ];
    }
}
