<?php

namespace Database\Seeders;
use App\Models\subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        subject::factory()
        ->count(10)
        ->create();
    }
}
