<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 21) as $index) {
            $name = $faker->unique()->name;
            Post::create([
                'user_id' => rand(1, 21),
                'category_id' => rand(1, 21),
                'title' => $name,
                'slug' => strtolower(str_replace(' ', '-', $name)),
                'desc' => $faker->paragraph,
                'image' => $faker->imageUrl
            ]);
        }
    }
}
