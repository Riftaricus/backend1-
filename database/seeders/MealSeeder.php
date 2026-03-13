<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MealSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $meals = [
            ['name' => 'Grilled Chicken', 'price' => 12.99],
            ['name' => 'Beef Burger', 'price' => 9.99],
            ['name' => 'Caesar Salad', 'price' => 7.49],
            ['name' => 'Margherita Pizza', 'price' => 11.50],
            ['name' => 'Pasta Carbonara', 'price' => 10.99],
        ];

        foreach ($meals as $meal) {
            DB::table('meals')->insert([
                'name' => $meal['name'],
                'price' => $meal['price'],
                'description' => $faker->sentence(12),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}