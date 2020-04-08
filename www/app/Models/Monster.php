<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Monster extends Model
{

    /*
     * types:
     * 0 = normal
     * 1 = arch
     * 2 = boss/dungeon
     * souls with no arch will have a type but no associate
     */
    const NORMAL = 0;
    const ARCH = 1;
    const DUNGEON = 2;
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return bool
     */
    public function isNormal()
    {
        return $this->type === self::NORMAL;
    }

    /**
     * @return bool
     */
    public function isArch()
    {
        return $this->type === self::ARCH;
    }

    /**
     * @return bool
     */
    public function isBoss()
    {
        return $this->type === self::DUNGEON;
    }


    /** Return type as a string
     * @return string
     * @todo get a locale-based accessor instead of extra function.
     */
    public function getType()
    {
        switch ($this->type) {
            case self::NORMAL:
                return 'Normal';
                break;
            case self::ARCH:
                return 'Archsoul';
                break;
            case self::DUNGEON:
                return 'Boss';
                break;
        }
        return 'No data';
    }

    /** Return the associated monster
     * @return BelongsTo
     */
    public function assoc()
    {
        return $this->belongsTo(Monster::class, 'associate', 'id');
    }

    /** Count the monsters owned by a given list
     * @param MonsterList $monsterList
     * @return integer
     */
    public function amountOwnedBy(MonsterList $monsterList)
    {
        return $this->hasMany(MonsterOwnership::class)->where('monster_list_id', $monsterList->id)->count();

    }
}
