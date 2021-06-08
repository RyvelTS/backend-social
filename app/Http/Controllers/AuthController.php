<?php

namespace App\Http\Controllers;

use App\Models\BuilderClass\UserBuilder;
use App\Http\Controllers\Controller;
use App\Models\ORM\User;
use App\Service\DateTimeHelper;
use DateTime;
use DateTimeZone;
use App\Service\HelperClass;

class AuthController extends Controller
{
    public function login()
    {

        $user = (new UserBuilder())
            ->setUsername('mikazuki')
            ->setName('Mikazuki Augus')
            ->setEmail('vinvolgrode05@gmail.com')
            ->setPhone('08972639761')
            ->setPassword('password')
            ->setBirthday(DateTimeHelper::make_date('Y-m-d', '2000-02-22'))
            ->build();

        User::create([
            'username' => $user->getUsername(),
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'phone' => $user->getPhone(),
            'password' => $user->getPassword(),
            'birthday' => $user->getBirthday(),
        ]);

        dd('done');
    }
}
