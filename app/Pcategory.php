<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcategory extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title'];
    protected $guarded = [];


    public function project()
    {
        return $this->hasMany(Product::class);
    }
}
