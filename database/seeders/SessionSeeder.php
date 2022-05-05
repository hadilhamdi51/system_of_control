<?php

namespace Database\Seeders;
use App\Models\session;
use Illuminate\Database\Seeder;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        session::factory()
        ->count(5)
        ->create();
}
}