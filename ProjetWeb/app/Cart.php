<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
        return $this->belongsTo('App\ProductType', 'product_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\User');
    }
}
