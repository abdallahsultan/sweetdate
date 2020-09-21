<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class Scategory extends Model
{

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'body'];
    protected $guarded = [];


    public function service()
    {
        return $this->hasMany(Service::class);
    }

}
