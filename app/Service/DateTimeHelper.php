<?php

namespace App\Service;

use DateTime;
use DateTimeZone;

class DateTimeHelper
{
    public static function make_date(string $date_format, string $date_string): DateTime
    {
        return DateTime::createFromFormat($date_format, $date_string, new DateTimeZone('Asia/Jakarta'));
    }

    public static function current_timestamp(): DateTime
    {
        return new DateTime("now", new DateTimeZone('Asia/Jakarta'));
    }
}
