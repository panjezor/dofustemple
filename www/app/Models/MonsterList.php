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

    public function myList()
    {
        return $this->hasManyThrough(Monster::class, MonsterOwnership::class, 'monster_list_id', 'id', 'id', 'monster_id');
    }

    public function ownerships()
    {
        return $this->hasMany(MonsterOwnership::class);
    }
}
