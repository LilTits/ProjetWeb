<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    // Primary Key
    protected $primaryKey = 'role_id';


    public function users(){

        return $this->belongsToMany(User::class);
    }
}
