<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id: 1
        DB::table('comment')->insert(
            [
                'user' => '2',
                'post' => '3',
                'comment' => 'This is my Comment at this post. From sherlock.',
                'vote_count' => 2,
            ]
        );

        //id: 2
        DB::table('comment')->insert(
            [
                'user' => '1',
                'post' => '5',
                'comment' => 'This is my Comment at this post from vin_albertus.',
                'vote_count' => -2,
            ]
        );
    }
}
