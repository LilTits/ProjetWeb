<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    // Table name
    protected $table = 'events';

    // public function cover()
    // {
    //     return $this->belongsTo('App\Image', 'image_cover');
    // }

    public function eventCreator()
    {
        return $this->belongsTo('App\User', 'creator');
    }

    public function category()
    {
        return $this->belongsTo('App\EventCategory', 'ecategory_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function eventLikes()
    {
        return $this->hasMany('App\EventLike');
    }

    public function usersLiked()
    {
        return $this->belongsToMany('App\User', 'event_likes');
    }

    public function userParticipates()
    {
        return $this->belongsToMany('App\User', 'event_participants');
    }

    public function eventParticipants()
    {
        return $this->hasMany('App\EventParticipant', 'event_id');
    }

    // public function creatorProfile()
    // {
    //     app('App\User')->profile->image_path;
    // }
}
