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
        $userIds = DB::table('users')->pluck('id')->toArray();

        foreach ($userIds as $userId) {
            DB::table('personal_datas')->insert([
                'adress' => $faker->address(),
                'phone_number' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'personal_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}