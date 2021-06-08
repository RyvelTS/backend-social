<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoteCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vote_comment')->insert(
            [
                'user' => '1',
                'comment' => '1',
                'vote' => UPVOTE
            ]
        );
        DB::table('vote_comment')->insert(
            [
                'user' => '2',
                'comment' => '1',
                'vote' => UPVOTE
            ]
        );
        DB::table('vote_comment')->insert(
            [
                'user' => '1',
                'comment' => '2',
                'vote' => DOWNVOTE
            ]
        );
        DB::table('vote_comment')->insert(
            [
                'user' => '2',
                'comment' => '2',
                'vote' => DOWNVOTE
            ]
        );
    }
}
