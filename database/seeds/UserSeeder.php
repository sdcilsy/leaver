<?php

use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create('id_ID');

        for ($i=0; $i <= 10; $i++) { 
            User::insert([
                'id' => $i,
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => '12345',
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}
