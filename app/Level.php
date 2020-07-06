<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

// la classe Model s'occupe de recup toutes les données de la table level
class Level extends Model
{
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
