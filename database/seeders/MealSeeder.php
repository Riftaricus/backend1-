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
            ['name' => 'Sloppy Joes', 'price' => 10.99],
            ['name' => 'Ground Chicken Ranch Burger', 'price' => 10.99],
            ['name' => 'Creamy Burrito Casserole', 'price' => 10.99],

            ['name' => 'Pad Thai', 'price' => 16.99],
            ['name' => 'Green Curry', 'price' => 18.99],
            ['name' => 'Massaman Curry', 'price' => 19.99],
            ['name' => 'Panang Curry', 'price' => 18.50],
            ['name' => 'Thai Basil Chicken', 'price' => 15.99],
            ['name' => 'Tom Yum Soup', 'price' => 9.49],
            ['name' => 'Tom Kha Soup', 'price' => 9.99],
            ['name' => 'Chicken Satay', 'price' => 11.49],
            ['name' => 'Spring Rolls', 'price' => 7.99],
            ['name' => 'Papaya Salad', 'price' => 8.99],
            ['name' => 'Mango Sticky Rice', 'price' => 6.99],
            ['name' => 'Pineapple Fried Rice', 'price' => 14.99],
            ['name' => 'Drunken Noodles', 'price' => 15.49],
            ['name' => 'Pad See Ew', 'price' => 14.99],
            ['name' => 'Thai Fried Rice', 'price' => 13.99],
            ['name' => 'Red Curry', 'price' => 17.99],
            ['name' => 'Yellow Curry', 'price' => 17.49],
            ['name' => 'Boat Noodles', 'price' => 13.49],
            ['name' => 'Larb Gai', 'price' => 12.99],
            ['name' => 'Thai Omelette Rice', 'price' => 11.99],
            ['name' => 'Crispy Pork Belly', 'price' => 18.99],
            ['name' => 'Garlic Pepper Beef', 'price' => 17.99],
            ['name' => 'Sweet Chili Chicken', 'price' => 14.49],
            ['name' => 'Cashew Nut Chicken', 'price' => 15.99],
            ['name' => 'Spicy Basil Tofu', 'price' => 13.99],
            ['name' => 'Vegetable Stir Fry', 'price' => 12.99],
            ['name' => 'Shrimp Pad Thai', 'price' => 17.99],
            ['name' => 'Beef Pad See Ew', 'price' => 16.49],
            ['name' => 'Chicken Panang Curry', 'price' => 18.49],
            ['name' => 'Salmon Green Curry', 'price' => 20.99],
            ['name' => 'Duck Red Curry', 'price' => 21.99],
            ['name' => 'Coconut Rice Bowl', 'price' => 11.49],
            ['name' => 'Thai BBQ Chicken', 'price' => 16.49],
            ['name' => 'Grilled Pork Skewers', 'price' => 12.49],
            ['name' => 'Crying Tiger Beef', 'price' => 22.99],
            ['name' => 'Basil Seafood Mix', 'price' => 19.49],
            ['name' => 'Tofu Green Curry', 'price' => 16.99],
            ['name' => 'Eggplant Basil Stir Fry', 'price' => 13.49],
            ['name' => 'Thai Glass Noodle Salad', 'price' => 12.99],
            ['name' => 'Coconut Shrimp', 'price' => 10.99],
            ['name' => 'Spicy Wings Thai Style', 'price' => 9.99],
            ['name' => 'Cucumber Relish Salad', 'price' => 6.99],
            ['name' => 'Thai Fish Cakes', 'price' => 10.49],
            ['name' => 'Curry Puff Pastry', 'price' => 8.49],
            ['name' => 'Sticky Rice Combo', 'price' => 5.99],
            ['name' => 'Thai Iced Tea Float', 'price' => 4.99],
            ['name' => 'Lemongrass Chicken Bowl', 'price' => 15.49],
            ['name' => 'Garlic Noodle Shrimp', 'price' => 17.49],
            ['name' => 'Thai Chili Beef Bowl', 'price' => 16.99],
            ['name' => 'Mushroom Basil Noodles', 'price' => 13.99],
            ['name' => 'Bangkok Street Noodles', 'price' => 14.49],
            ['name' => 'Coconut Curry Ramen', 'price' => 15.99],
            ['name' => 'Peanut Satay Bowl', 'price' => 14.99],
            ['name' => 'Sesame Chicken Rice', 'price' => 13.99],
            ['name' => 'Five Spice Pork Rice', 'price' => 15.99],
            ['name' => 'Thai Herb Grilled Fish', 'price' => 19.99],
            ['name' => 'Lime Chili Shrimp Plate', 'price' => 18.49],
            ['name' => 'Basil Egg Fried Rice', 'price' => 12.49],
            ['name' => 'Black Pepper Tofu Rice', 'price' => 12.99],
            ['name' => 'Spicy Garlic Chicken Pasta', 'price' => 14.99],
            ['name' => 'Coconut Lime Chicken', 'price' => 15.49],
            ['name' => 'Thai BBQ Pork Ribs', 'price' => 20.49],
            ['name' => 'Chili Jam Fried Rice', 'price' => 13.49],
            ['name' => 'Golden Curry Chicken', 'price' => 17.49],
            ['name' => 'Green Papaya Shrimp Salad', 'price' => 13.99],
            ['name' => 'Thai Basil Beef Noodles', 'price' => 16.49],
            ['name' => 'Lemongrass Tofu Bowl', 'price' => 13.49],
            ['name' => 'Bangkok Beef Burger', 'price' => 12.99],
            ['name' => 'Spicy Coconut Soup Bowl', 'price' => 10.49],
        ];

        sort($meals);

        foreach ($meals as $meal) {
            DB::table('meals')->insert([
                'name' => $meal['name'],
                'price' => $meal['price'],
                'description' => $faker->sentence(12),
                'featured' => $faker->boolean(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}