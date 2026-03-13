<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $personalDataIds = DB::table('personal_data')->pluck('id')->toArray();

        // Seed a known admin user for easy testing
        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'personal_id' => $personalDataIds[0],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Seed remaining users, each linked to a unique personal_data row
        foreach (array_slice($personalDataIds, 1) as $personalId) {
            DB::table('users')->insert([
                'username' => $faker->unique()->userName(),
                'password' => Hash::make('password'),
                'personal_id' => $personalId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}