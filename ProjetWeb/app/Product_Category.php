<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_Category extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'product_categories';

    // Primary Key
    protected $primaryKey = 'category_id';
}
