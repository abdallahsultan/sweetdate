<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [];
    public function tables()
    {
        return $this->hasMany(Tables::class,'resev_id');
    }
}
