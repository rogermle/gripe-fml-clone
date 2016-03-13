<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $numPosts = count(Post::all());
        foreach(range(1,$numPosts) as $index)
        {
            Comment::create([
                'post_id' => rand(1, $numPosts),
                'comment' => $faker->word,
                'visible' => $faker->randomElement([0,1])
            ]);
        }
    }
}
