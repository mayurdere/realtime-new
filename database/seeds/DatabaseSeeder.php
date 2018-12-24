<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Category;
use App\Model\Question;
use App\Model\Reply;
use App\Model\Like;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 10)->create();
        factory(\App\Model\Category::class, 5)->create();
        factory(\App\Model\Question::class, 10)->create();
        factory(\App\Model\Reply::class, 50)->create()->each(function($reply) {
            return $reply->like()->save(factory(\App\Model\Like::class)->make());
        });
    }
}
