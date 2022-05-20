<?php

namespace Database\Seeders;
use App\Models\user;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users= [
            [
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'admin'=>1,
            'password'=>\Hash::make('1234567')],

            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'admin'=>0,
                'password'=>\Hash::make('1234567')]

        ];
        foreach($users as $key =>$value ){
            User::create($value);
        }
    }
}
