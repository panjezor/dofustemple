<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{

    /*
     * types:
     * 0 = normal
     * 1 = arch
     * 2 = boss
     * monsters with no arch will have a type but no associate
     */
    protected $fillable = ['monster_name', 'type', 'associate'];
    public $timestamps = false;


    public function isNormal()
    {
        if ($this->type === 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isArch()
    {
        if ($this->type === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function isBoss()
    {
        if ($this->type === 2) {
            return true;
        } else {
            return false;
        }
    }

    public static function allNormals()
    {
        return Monster::where('type', '=', '0');
    }

    public static function allArchs()
    {
        return Monster::where('type', '=', '1')->orderBy('monster_name')->get();
    }

    public static function allBosses()
    {
        return Monster::where('type', '=', '2');
    }

    public function getType()
    {
        switch ($this->type) {
            case '0':
                return 'Normal';
                break;
            case '1':
                return 'Archmonster';
                break;
            case '2':
                return 'Boss';
                break;
        }
    }

    public function otherName($int)
    {
        if ($this->associate !== null) {
            $monsters = Monster::find($this->associate);

            return $monsters->monster_name;
        } else {
            return 'no name';
        }
    }

    public function amountInList()
    {
            return MonsterOwnership::where('list_id', $this->id)->where('monster_id', $this_id)->count();
    }


}
