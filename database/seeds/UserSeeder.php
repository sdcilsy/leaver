<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){
            DB::table('users')->insert([
                'id'=> $i,
                'name' => $faker->name,
                'username' => $faker->username,
                'role' => 'admin',
                'password' => Hash::make('12345'),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'course' => ''
            ]);
        }
    }
}