<?php

namespace Database\Seeders;
use App\Models\club;
use Illuminate\Database\Seeder;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        club::factory()
        ->count(6)
        ->create();
    }
}
