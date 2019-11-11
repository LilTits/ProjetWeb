<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adress extends Model
{
    use SoftDeletes;

    // Table Name
    protected $table = 'adresses';

    // Primary Key
    protected $primaryKey = 'adress_id';
}
