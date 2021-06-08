<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id: 1
        DB::table('post')->insert(
            [
                'user' => '1',
                'image' => 'post-1.jpg',
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?',
                'like_count' => 2
            ]
        );
        //id: 2
        DB::table('post')->insert(
            [
                'user' => '1',
                'image' => 'post-2.jpg',
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?'
            ]
        );
        //id: 3
        DB::table('post')->insert(
            [
                'user' => '1',
                'image' => 'post-3.jpg',
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?',
                'like_count' => 1
            ]
        );
        //id: 4
        DB::table('post')->insert(
            [
                'user' => '1',
                'image' => 'post-4.jpg',
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?'
            ]
        );
        //id: 5
        DB::table('post')->insert(
            [
                'user' => '2',
                'image' => 'post-1.jpg',
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?'
            ]
        );
        //id: 6
        DB::table('post')->insert(
            [
                'user' => '2',
                'image' => 'post-2.jpg',
                'caption' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?',
                'like_count' => 1
            ]
        );
    }
}
