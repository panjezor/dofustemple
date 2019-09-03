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
        return $this->hasOne('App\Models\Monster');
    }

    public function list()
    {
        return $this->belongsTo('App\Models\List');
    }
}
