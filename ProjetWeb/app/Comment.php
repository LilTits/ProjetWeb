<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //Table name
    protected $table = 'comments';

    // Primery key
    public $primaryKey = 'comment_id';

    // Timestamps
    public $timestamps = true;
}
