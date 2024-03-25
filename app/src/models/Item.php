<?php

namespace Models;
use Illuminate\Database\Eloquent\Model;
class Item extends Model
{
    protected $table = 'Items';
    protected $fillable = ['items','done'];
    public $timestamps = false;
}