<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,10) as $index)
        {
            Post::create([
                'id'   => $index,
                'nick' => str_replace('.', '_', $faker->unique()->userName),
                'post' => $faker->sentence,
                'sex' => $faker->randomElement(['Male', 'Female']),
                'agree' => $faker->randomNumber(6),
                'disagree' => $faker->randomNumber(6),
                'visible' => $faker->randomElement([0,1])
            ]);
        }
    }
}
