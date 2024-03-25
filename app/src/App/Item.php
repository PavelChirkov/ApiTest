<?php

namespace App;

use App\Orders\Done;
use App\Orders\Get;
use App\Orders\GetAllItem;
use App\Orders\Update;
use Models\Item as ModelItem;

use  App\Orders\Create;

class Item
{
    private $path = [];
    private $count = 0;
    private $numUrl;

    public function __construct($path)
    {
        $path = explode('/', $path);
        $url = Helpers::arrayUrl($path);
        $this->count = $url[0];
        $this->path = $url[1];
        $this->numUrl = Helpers::pathApi($path);
    }

    public function init()
    {
        switch ($this->numUrl) {
            case 1:
                Create::go();
                break;
            case 2:
               Update::byId($this->path[1]);
                break;
            case 3:
                $id = (int)$this->path[1];
                Get::printId($id);
                break;
            case 4:
                Done::exists($this->path[1]);
                break;
            case 5:
                GetAllItem::done($this->path[2]);
                break;
            default:
                PageJson::print_page(['ошибка, такой страницы не существует']);
                break;
        }
    }

}