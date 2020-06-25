<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Level extends Model
{
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
