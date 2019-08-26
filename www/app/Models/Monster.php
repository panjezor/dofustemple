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
     * souls with no arch will have a type but no associate
     */
    protected $guarded = [];

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
        return Monster::where('type', '=', '1')->orderBy('soul_name')->get();
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
                return 'Archsoul';
                break;
            case '2':
                return 'Boss';
                break;
        }
    }

    public function otherName($int)
    {
        if ($this->associate !== null) {
            $souls = Monster::find($this->associate);

            return $souls->soul_name;
        } else {
            return 'no name';
        }
    }

}
