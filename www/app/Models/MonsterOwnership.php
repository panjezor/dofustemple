<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterOwnership extends Model
{
    //
    protected $table = 'monster_ownerships';

    protected $fillable = ['monster_id','user_id'];

    public $timestamps = false;

    public function monster(){
        $this->hasOne('App\Models\Monster')->get();
    }
    public function user(){
        $this->belongsTo('App\Models\User')->get();
    }
}
