<?php
namespace App\Permissions;

use App\Permission;
use App\Role;

trait HasPermissionsTrait 
{

   public function roles()
   {
      return $this->belongsToMany(Role::class,'role_user');
   }

   public function permissions()
   {
      return $this->belongsToMany(Permission::class,'permission_user');
   }

   public function hasRole( ... $roles ) 
   {
    foreach ($roles as $role) 
    {
       if ($this->roles->contains('slug', $role)) 
       {
          return true;
       }
    }
    return false;
   }

   public function hasPermission($permission) 
   {
      return (bool) $this->permissions->where('slug', $permission->slug)->count();
   }

   public function hasPermissionTo($permission) 
   {
      return $this->hasPermission($permission);
   }
   
   

 
}