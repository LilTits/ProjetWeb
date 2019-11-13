<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adress extends Model
{
    use SoftDeletes;

    // Table Name
    protected $table = 'adresses';

    public function centers()
    {
        return $this->hasMany('App\Center');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    
}
