<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'body'];
    protected $fillable = ['avatar', 'status', 'phone'];
}
