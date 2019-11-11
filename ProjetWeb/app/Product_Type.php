<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_Type extends Model
{
    use SoftDeletes;

    // Table Name
    protected $table = 'product_types';

    // Primary Key
    protected $primaryKey = 'type_id';
}
