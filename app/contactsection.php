<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactsection extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title'];
    protected $guarded = [];

}
