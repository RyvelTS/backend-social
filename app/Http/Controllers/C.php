<?php

namespace App\Http\Controllers;

use App\Service\HelperClass;

class C extends Controller
{
    public function index()
    {
        $date = HelperClass::makeDate('2000-02-20')->format('Y-m-d');
        echo ($date);
    }
}
