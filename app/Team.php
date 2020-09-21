<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'body'];
    protected $fillable = ['avatar'];
}
