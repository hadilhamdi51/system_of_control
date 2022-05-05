<?php

namespace Database\Seeders;
use App\Models\reclamation;
use Illuminate\Database\Seeder;

class ReclamationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        reclamation::factory()
        ->count(10)
        ->create();
    }
}
