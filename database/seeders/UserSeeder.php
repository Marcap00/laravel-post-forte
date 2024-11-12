<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        for ($i=0; $i<10; $i++) {
            $user = new User();
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = Hash::make(12345678);
            $user->save();
        }
    }
}
