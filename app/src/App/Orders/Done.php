<?php

namespace App\Orders;
use App\Acess;
use App\PageJson;
use App\PostData;
use Models\Item as ModelItem;

class Done
{
    public static function exists(int $id){
        if(Acess::check()) {
            $item = Get::byId($id)->first();
            $items = $item->items;
            if ($item->done == 0) {
                $item->done = 1;
                $item->save();
                PageJson::print_page(['заказ обновлен']);
            } else {
                PageJson::print_page(['данный заказ не существует или закрыт']);
            }
        }else PageJson::print_page(['доступ закрыт']);
    }
}