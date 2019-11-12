<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_Adress extends Model
{
    use SoftDeletes;

    // Table Name
    protected $table = 'user_adresses';

    // Primary Key
    protected $primaryKey = 'uadress_id';
}
