<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Center extends Model
{
    use SoftDeletes;

    // Primary Key
    protected $primaryKey = 'id';

    public function users(){

        return $this->belongsToMany('App\User');
    }

   
}
