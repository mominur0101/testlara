<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        foreach (range(1, 21) as $index) {
            $name = $faker->unique()->name;
            Category::create([
                'user_id' => rand(1, 21),
                'name' => $name,
                'slug' => strtolower(str_replace(' ', '-', $name)),
                'status' => $this->randStatus(),
            ]);
        }
    }
    private function randStatus() {
        $status = [
            'active' => 'active',
            'inactive' => 'inactive'
        ];
        return array_rand($status);
    }
}
