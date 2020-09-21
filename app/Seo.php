<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['home', 'about', 'blogs', 'projects', 'services', 'contact', 'meta', 'desc'];
    protected $fillable = ['avatar'];


    public function scategory()
    {
        return $this->belongsTo(Scategory::class);
    }
}
