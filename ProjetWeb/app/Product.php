<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Table name
    protected $table = 'products';

    // Primery key
    public $primaryKey = 'product_id';

    // Timestamps
    public $timestamps = true;
}
