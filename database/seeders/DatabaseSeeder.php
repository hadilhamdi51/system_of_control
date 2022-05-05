<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SubjectSeeder::class,
            Chef_DepSeeder::class,
            DepartmentSeeder::class,
            StudentSeeder::class,
            SessionSeeder::class,
            ClubSeeder::class,
            ClassroomSeeder::class,
            ComposantSeeder::class,
            ReclamationSeeder::class,
            AdminSeeder::class,

        ]);
    }
}
