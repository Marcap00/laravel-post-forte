<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $userIds = User::all()->pluck("id");

        for ($i=0; $i<50; $i++) {
            $post = new Post();
            $post->user_id = $faker->randomElement($userIds);
            $post->title = $faker->unique->realTextBetween(5, 30);
            $post->date = $faker->date();
            $post->description = $faker->unique->realTextBetween(40, 80);
            $post->content = $faker->realTextBetween(350, 800);
            $post->save();
        }
    }
}
