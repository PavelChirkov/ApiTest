<?php
namespace Models;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;


class Database {
    function __construct() {
        $capsule = new Capsule;
        $capsule->addConnection([
            "driver" => "mysql",
            "host" => "mysql",
            "database" => "pizza",
            "username" => "root",
            "password" => "password",
            "charset" => "utf8",
            "collation" => "utf8_unicode_ci",
            "prefix" => "",
        ]);

        $capsule->bootEloquent();
    }
}