<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pcategory;
class Product extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'body'];
    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Pcategory::class, 'pcategory_id', 'id');
    }
}
