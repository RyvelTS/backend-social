<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('like_post')->insert(
            [
                'user' => '1',
                'post' => '1',
            ]
        );
        DB::table('like_post')->insert(
            [
                'user' => '2',
                'post' => '1',
            ]
        );
        DB::table('like_post')->insert(
            [
                'user' => '2',
                'post' => '3',
            ]
        );
        DB::table('like_post')->insert(
            [
                'user' => '1',
                'post' => '6',
            ]
        );
    }
}
