<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
use App\User;
>>>>>>> 63af2219cef7cda1d38f3cb271147e8a8b0203a9

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        //
=======
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
>>>>>>> 63af2219cef7cda1d38f3cb271147e8a8b0203a9
    }
}
