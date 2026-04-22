<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++) {
            // $faker = Faker::create();
             $faker = \Faker\Factory::create();
            $profile = new Profile();
            $profile->user_id = $i + 1;
            $profile->first_name = $faker->firstName();
            $profile->last_name = $faker->lastName();
            $profile->phone_number = $faker->phoneNumber();
            $profile->birthdate = $faker->date();
            $profile->country = $faker->countryCode();
            $profile->age = $faker->numberBetween(18, 60);
            $profile->address = $faker->address();
            $profile->save();
        }
    }
}
// php artisan migrate:rollback --step