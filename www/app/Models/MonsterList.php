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
    public static function allLists(){
        return MonsterList::all();
    }
}
