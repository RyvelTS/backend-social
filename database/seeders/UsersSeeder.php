<?php

namespace Database\Seeders;

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
                'gender' => 'Male',
                'bio' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, quisquam?',
                'website' => 'https://albertuskevin.github.io',
                'birthday' => HelperClass::makeDate('2000-01-31')->format('Y-m-d'),
            ]
        );
    }
}
