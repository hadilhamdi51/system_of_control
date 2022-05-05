<?php

namespace Database\Seeders;
use App\Models\classroom;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        classroom::factory()
        ->count(10)
        ->create();
    }
}
