<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterOwnership extends Model
{
    //
    protected $table = 'monster_ownerships';

    protected $fillable = ['monster_id','list_id'];

    public $timestamps = false;

    public function monster(){
       return $this->hasOne('App\Models\Monster');
    }
    public function list(){
       return $this->belongsTo('App\Models\List');
    }
}
