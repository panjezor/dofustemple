<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserMonsterList extends Model
{
    protected $guarded = [];

    public $timestamps = false;
    protected $table = 'user_lists';
}
