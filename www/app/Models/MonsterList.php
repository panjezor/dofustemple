<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class MonsterList extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var bool
     */
    public $timestamps = false;

    /** Relation to users via user_lists pivot table
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_lists');
    }

    /**
     * @return HasMany
     */
    public function ownerships()
    {
        return $this->hasMany(MonsterOwnership::class);
    }

    /** relation to monsters via MonsterOwnership model
     * @return HasManyThrough
     */
    public function monsters()
    {
        return $this->hasManyThrough(Monster::class, MonsterOwnership::class, 'monster_list_id', 'id', 'id', 'monster_id');
    }
}
