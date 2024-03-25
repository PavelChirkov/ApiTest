<?php

namespace App;

use Dotenv\Dotenv;

class Acess
{
    public static function check(){

        $dotenv = Dotenv::createImmutable(dirname(__DIR__.'/../../../'));
        $dotenv->load();

        if($_ENV['XAUTHKEY'] == $_SERVER['HTTP_X_AUTH_KEY']) return true;
        else return false;
    }
}