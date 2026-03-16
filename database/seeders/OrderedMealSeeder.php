<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderedMealSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = DB::table('users')->pluck('id')->toArray();
        $mealIds = DB::table('meals')->pluck('id')->toArray();
        $statuses = ['Pending', 'Preparing', 'Delivered', 'Cancelled'];

        if ($userIds === [] || $mealIds === []) {
            return;
        }

        foreach (range(1, 20) as $i) {
            DB::table('ordered_meals')->insert([
                'meal_id' => $mealIds[array_rand($mealIds)],
                'user_id' => $userIds[array_rand($userIds)],
                'status' => $statuses[array_rand($statuses)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}