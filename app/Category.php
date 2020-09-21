<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;

class Category extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title'];
    protected $guarded = [];


    public function project()
    {
        return $this->hasMany(Project::class);
    }

}
