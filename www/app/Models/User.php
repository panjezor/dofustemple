<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @param integer from 0 to 2 indicating type $type
     * @return \Illuminate\Database\Eloquent\Collection of monsters owned
     */
    public function getList()
    {
//        $type = null
//        if ($type) {
//            return $this
//                ->hasManyThrough('App\Models\MonsterOwnership', 'App\Models\Monster')
//                ->where('type', '=', $type)
//                ->orderBy('monster_id')
//                ->get();
//        } else {
//            return $this
//                ->hasManyThrough('App\Models\MonsterOwnership', 'App\Models\Monster')
//                ->orderBy('monster_id')
//                ->get();
//        }
    }
}
