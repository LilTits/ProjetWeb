<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAdress extends Model
{
    use SoftDeletes;

    // Table Name
    protected $table = 'user_adresses';
}
