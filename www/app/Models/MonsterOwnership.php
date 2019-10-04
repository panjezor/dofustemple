<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterOwnership extends Model
{
    //

    protected $guarded = [];

    public $timestamps = false;

    public function soul()
    {
        return $this->hasOne(Monster::class);
    }

    public function list()
    {
        return $this->belongsTo(MonsterList::class);
    }
}
