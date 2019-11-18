<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommentLike extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'comment_likes';

    public function comment()
    {
        return $this->belongsTo('App\Comment');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
