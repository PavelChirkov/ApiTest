<?php

namespace App;

class PageJson
{
    public static function headerJSON()
    {
        print header('Content-Type: application/json; charset=utf-8');
    }

    public static function printJSON($data)
    {
        return json_encode($data);
    }

    public static function print_page($data)
    {
        self::headerJSON();
        print self::printJSON($data);
    }
}