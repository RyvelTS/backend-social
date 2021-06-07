<?php

namespace App\Service;

use DateTime;
use DateTimeZone;
use Illuminate\Support\Facades\Date;

class HelperClass
{
    public static function makeDate(string $date_string)
    {
        return DateTime::createFromFormat('Y-m-d', $date_string, new DateTimeZone('Asia/Jakarta'));
    }
}
