<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonalDataSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $i) {
            DB::table('personal_data')->insert([
                'adress' => $faker->address(),
                'phone_number' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}