<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'body', 'small_title', 'small_body'];
    protected $fillable = ['avatar'];
}
