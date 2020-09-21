<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Project extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'body'];
    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
