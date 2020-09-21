<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counter extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title'];
    protected $guarded = [];

}
