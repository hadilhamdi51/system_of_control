<?php

namespace Database\Seeders;
use App\Models\composant;
use Illuminate\Database\Seeder;

class ComposantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        composant::factory()
        ->count(30)
        ->create();
}
}