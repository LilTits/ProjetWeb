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

        public function centers(){

            return $this->belongsToMany('App\Center');
        }

       /* public function roles(){

            return $this->belongsToMany(Role::class);
            
        }*/
    
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

    public function permissions()
    {
        return $this->belongstoMany(Permission::class, 'permission_user');
    }

    public function adresses()
    {
        return $this->belongstoMany(Permission::class, 'permission_user');
    }
}
