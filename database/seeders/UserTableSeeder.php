<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->defaultUser();
        $faker = Factory::create();
        foreach(range(1,20) as $index){
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt($faker->password),
            ]);
        }
    }

    public function defaultUser(){
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
