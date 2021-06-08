<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReplyCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id: 1
        DB::table('reply_comment')->insert(
            [
                'user' => '1',
                'comment' => '1',
                'reply' => 'This is my reply comment at this post. From vin_albertus.',
            ]
        );

        //id: 2
        DB::table('reply_comment')->insert(
            [
                'user' => '2',
                'comment' => '2',
                'reply' => 'This is my reply comment at this post. From sherlock.',
            ]
        );
    }
}
