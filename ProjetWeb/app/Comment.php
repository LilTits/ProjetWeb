<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
     
    //Table name
    protected $table = 'comments';

    // Primery key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;
}


   