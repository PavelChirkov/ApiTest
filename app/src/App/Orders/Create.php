<?php

namespace App\Orders;

use App\Item;
use App\PageJson;
use App\PostData;
use Models\Item as ModelItem;

//сохранение заказа
class Create
{
    public static function go()
    {
        $data = PostData::data();
        if (!empty($data)) PageJson::print_page(
            Get::byId(
                ModelItem::insertGetId([
                    'items' => json_encode($data['items']),
                    'done' => 0
                ]))->get()
        );
        else PageJson::print_page(['ошибка, данные в заказе не верны']);
    }
}