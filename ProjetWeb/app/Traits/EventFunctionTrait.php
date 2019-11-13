<?php
namespace App\Traits;

use App\Event;
use App\User;
use App\Image;


trait HasPermissionsTrait {
    
    public function creatorProfile()
    {
        return $this->eventCreator->profile->image_path;
    }
}
