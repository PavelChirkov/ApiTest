<?php

namespace App\Orders;

use App\PageJson;
use App\PostData;
use Models\Item as ModelItem;

class Update
{
    public static function byId(int $id)
    {
        $data = PostData::data();
        $item = Get::byId($id)->first();
        $items = $item->items;
        if($item->done == 0){
            $array = array_merge(json_decode($items),$data);
            $item->items = json_encode($array);
            $item->save();
            PageJson::print_page(['заказ обновлен']);
        }else{
            PageJson::print_page(['данный заказ не существует или закрыт']);
        }
    }
}