<?php

namespace Database\Seeders;

use App\Models\Follow;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            PostSeeder::class,
            LikePostSeeder::class,
            BookmarkedPostSeeder::class,
            CommentSeeder::class,
            FollowSeeder::class,
            VoteCommentSeeder::class,
            ReplyCommentSeeder::class
        ]);
    }
}
