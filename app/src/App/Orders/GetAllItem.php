<?php

namespace App\Orders;
use App\Acess;
use App\PageJson;
use App\PostData;
use Models\Item as ModelItem;

class GetAllItem
{
    public static function done($status){
        if(Acess::check()) {
            $items = ModelItem::where('done', '=', $status);
            if ($items) PageJson::print_page($items->get());
            else PageJson::print_page(['неизвестная ошибка']);
        }else PageJson::print_page(['доступ закрыт']);

    }

}