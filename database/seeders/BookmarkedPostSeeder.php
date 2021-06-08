<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookmarkedPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookmarked_post')->insert(
            [
                'user' => '1',
                'post' => '6',
            ]
        );
        DB::table('bookmarked_post')->insert(
            [
                'user' => '2',
                'post' => '1',
            ]
        );
    }
}
