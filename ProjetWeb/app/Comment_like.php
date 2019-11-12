<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment_like extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'comment_likes';
}
