<?php

use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123456'),
                'dob' => $faker->date,
                'address' => $faker->address,
                'phone' => $faker->e164PhoneNumber,
            ]);
        }
    }
}
