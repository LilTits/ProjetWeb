<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function author()
    {
        return $this->belongsTo('App\User', 'author');
    }

    public function likes()
    {
        return $this->hasMany('App\CommentLike');
    }

    public function cntLikes()
    {
        return $this->hasMany('App\CommentLike')
        ->selectRaw('count(*) as affragate')
        ->groupBy('comment_id');
    }

    public function usersLiked()
    {
        return $this->belongsToMany('App\User')
        ->withPivot('App\CommentLike', 'user_id');
    }
}


   