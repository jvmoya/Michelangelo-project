<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public function toppings()
    {
        return $this->belongsToMany(Toppings::class);
    }
}
