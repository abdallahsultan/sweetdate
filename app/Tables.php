<?php

namespace App;
use App\Reservation;

use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    protected $fillable = ['name', 'price','persons'];
    //
    public function resevation()
    {
        return $this->belongsTo(Resevation::class);
    }
}
