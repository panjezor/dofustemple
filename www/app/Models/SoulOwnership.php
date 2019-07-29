<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SoulOwnership extends Model
{
    //
    protected $table = 'soul_ownerships';

    protected $fillable = ['soul_id','list_id'];

    public $timestamps = false;

    public function soul(){
       return $this->hasOne('App\Models\Soul');
    }
    public function list(){
       return $this->belongsTo('App\Models\List');
    }
}
