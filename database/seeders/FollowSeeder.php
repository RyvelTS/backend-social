<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id: 1
        DB::table('follow')->insert(
            [
                'follower' => '2',
                'following' => '1'
            ]
        );
    }
}
