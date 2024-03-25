<?php

namespace App;

require "vendor/autoload.php";

use App\Item;
use Dotenv\Dotenv;
use Models\Database;

$dt = new Database();

$item = new Item(Helpers::getGet());

$item->init();




