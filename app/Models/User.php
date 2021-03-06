<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
     * @return BelongsToMany
     */
    public function lists()
    {
        return $this->belongsToMany(MonsterList::class, 'user_lists');
    }

    /**
     * @param $list_id
     * @return string
     */
    public function hasList($list_id)
    {
        $lists = $this->belongsToMany(MonsterList::class, 'user_lists')->get();
        $check = 'hehe';
        $lists->map(function ($list) use ($list_id, &$check) {
            if ($list->id == $list_id) {
                $check = true;
            }
        });
        return $check;
    }

    /**
     * @return bool
     */
    public function isDev()
    {
        return $this->dev == true;
    }

    /**
     * @return HasMany
     */
    public function todos()
    {
        return $this->hasMany(Todo::class, 'created_by');
    }
}
