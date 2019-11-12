<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use SoftDelets;

    // Primary Key
    protected $primaryKey = 'image_id';

    public function products()
    {
        return $this->belongstoMany(Product::class, 'image_product');
    }
}
