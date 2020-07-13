<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

// la classe Model s'occupe de recup toutes les données de la table level_skill _user
class LevelSkillUser extends Model
{
    public $table = 'level_skill_user';

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
