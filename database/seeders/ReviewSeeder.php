<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $userIds = DB::table('personal_data')->pluck('id')->toArray();

        foreach (array_slice($userIds, 1) as $userId) {
            DB::table('reviews')->insert([
                'rating' => $faker->numberBetween(1, 10),
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
