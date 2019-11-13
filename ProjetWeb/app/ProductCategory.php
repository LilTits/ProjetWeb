<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'product_categories';

    public function types()
    {
        return $this->hasMany('App\ProductType', 'pcategory_id');
    }
}
