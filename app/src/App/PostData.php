<?php

namespace App;


class PostData
{
    public static function data(){
        return json_decode(file_get_contents("php://input"), true);
    }

}