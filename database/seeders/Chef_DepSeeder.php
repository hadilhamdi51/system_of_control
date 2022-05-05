<?php

namespace Database\Seeders;
use App\Models\chef_dep;
use Illuminate\Database\Seeder;

class Chef_DepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        chef_dep::factory()
        ->count(5)
        ->create();
    }
}
