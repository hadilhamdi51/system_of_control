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
                'password'=>\Hash::make('1234567')],

                
            [
                'name'=>'Hadil Hamdi ',
                'email'=>'hamdihadil51@gmail.com',
                'admin'=>1,
                'password'=>\Hash::make('hadil123'),
                'image'=>'img\avatars\dila.jpg',

            ],
            [
                'name'=>'Oumaima Ben Amor ',
                'email'=>'oumaima@gmail.com',
                'admin'=>0,
                'password'=>\Hash::make('oumaima123'),
                'image'=>'img\avatars\ouma.jpeg',

            ],
            [
                'name'=>'Melek Kraimia  ',
                'email'=>'melek@gmail.com',
                'admin'=>0,
                'password'=>\Hash::make('melek123'),
                'image'=>'img\avatars\ouma.jpg',

            ],
            [
                'name'=>'Ines Khiari ',
                'email'=>'ines@gmail.com',
                'admin'=>0,
                'password'=>\Hash::make('iness123'),
                'image'=>'img\avatars\ines.jpg',

            ]




        ];
        foreach($users as $key =>$value ){
            User::create($value);
        }
    }
}
