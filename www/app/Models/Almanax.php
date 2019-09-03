<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Almanax extends Model
{
    protected $table = "almanax";
    protected $fillable = ['needed_by', 'offering'];
    public $timestamps = false;

    public static function pickNext()
    {
        $date = Carbon::today();
        $interval = \Carbon\CarbonInterval::weeks(2);
        $date->add($interval)->toDateTimeString();
        return Almanax::whereDate('needed_by', '>', Carbon::yesterday()->toDateString())->whereDate('needed_by', '<', $date->add($interval)->toDateTimeString())->get();
    }
}
