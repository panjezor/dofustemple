<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterList extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_lists');
    }

    public static function listsForUser(User $user){
        return $user->lists;
    }
    public function myList(){
        return $this->hasManyThrough(Monster::class, MonsterOwnership::class,'monster_list_id','id','id','monster_id');
    }
}
