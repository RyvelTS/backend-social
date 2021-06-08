<?php

namespace Database\Seeders;

use App\Service\DateTimeHelper;
use Illuminate\Database\Seeder;
use App\Service\HelperClass;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'username' => 'vin_albertus',
                'email' => 'vinalbertus@gmail.com',
                'phone' => '08123456789',
                'name' => 'Albertus Kevin',
                'password' => Hash::make('password'),
                'gender' => MALE,
                'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?',
                'website' => 'https://albertuskevin.github.io',
                'birthday' => DateTimeHelper::make_date('Y-m-d', '2000-01-31')->format('Y-m-d'),
            ]
        );
        DB::table('users')->insert(
            [
                'username' => 'sherlock',
                'email' => 'albertusk.vr46@gmail.com',
                'phone' => '08999277263',
                'name' => 'Sherlock Holmes',
                'password' => Hash::make('password'),
                'gender' => MALE,
                'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?',
                'website' => 'https://vin-albertus.blogspot.com',
                'birthday' => DateTimeHelper::make_date('Y-m-d', '1990-05-25')->format('Y-m-d'),
            ]
        );
    }
}
