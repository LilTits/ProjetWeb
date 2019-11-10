<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Users;

class Utilisateur extends Model{
    
    protected $fillable = [
        'name', 'prenom', 'email', 'password', 'campus',
    ];

}

?>