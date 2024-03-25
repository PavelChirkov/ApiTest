<?php

namespace App\Orders;

use App\PageJson;
use Models\Item as ModelItem;

class Get
{
    public static function byId(int $id)
    {
        return ModelItem::where('id', $id);
    }

    public static function printId(int $id)
    {
        $order = self::byId($id);
        if ($order) PageJson::print_page($order->get());
        else PageJson::print_page(['ошибка, такого продукта не найдено']);
    }
}