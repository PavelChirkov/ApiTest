<?php

namespace App;
/*
 Вспомогательные функции для api
не по SOLID
 */


class Helpers
{
    public static function arrayUrl($url){
        $url = array_diff($url, array(''));
        return [count($url), $url];
    }
    public static function pathApi($url){

        $url = self::arrayUrl($url);

        if ($url[0] == 1 && $url[1][0] == 'orders') return 1;
        if ($url[0] == 3 && $url[1][2] == 'items' ) return 2;
        if ($url[0] == 2) return 3;
        if ($url[0] == 3 && $url[1][2] == 'done') return 4;
        if ($url[0] == 3 && $url[1][1] == 'done') return 5;

        return 0;
    }

    public static function getGet(){
        if(isset($_GET['i']) && $_GET['i'] != '') return $_GET['i'];
        return 0;
    }


}