<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Permissions\HasPermissionsTrait;


class User extends Authenticatable 
{
    use Notifiable;
    use SoftDeletes;
    use HasPermissionsTrait;

    // Primary Key
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'center_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongstoMany(Role::class, 'role_user');
    }

    public function rolesName()
    {
        return $this->belongstoMany(Role::class)
        ->selectRaw('roles.name');
    }

    public function permissions()
    {
        return $this->belongstoMany(Permission::class, 'permission_user');
    }
    
    public function adresses()
    {
        return $this->belongsToMany('App\Adress', 'user_adresses')
        ->withPivot('is_primary');
    }

    public function centers()
    {
        return $this->belongsTo('App\Center', 'center_id');
    }

    public function profile()
    {
        return $this->belongsTo('App\Image', 'image_profile');
    }

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function visits()
    {
        return $this->hasMany('App\Visit');
    }

    public function carts()
    {
        return $this->hasMany('App\Cart');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review', 'author');
    }

    public function eventsCreated()
    {
        return $this->hasMany('App\Event', 'creator');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'author');
    }

    public function commentLikes()
    {
        return $this->hasMany('App\CommentLike');
    }

    public function likedComments()
    {
        return $this->belongsToMany('App\Comment', 'comment_likes');
    }

    public function eventLikes()
    {
        return $this->hasMany('App\EventLike');
    }

    public function likedEvents()
    {
        return $this->belongsToMany('App\Event', 'event_likes');
    }

    public function eventParticipants()
    {
        return $this->hasMany('App\EventParticipant');
    }

    public function participatedEvents()
    {
        return $this->belongsToMany('App\Event', 'event_participants')
        ->withPivot('status');
    }

}
