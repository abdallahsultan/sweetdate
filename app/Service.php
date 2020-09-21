<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scategory;
class Service extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'body'];
    protected $guarded = [];


    public function scategory()
    {
        return $this->belongsTo(Scategory::class);
    }
}
