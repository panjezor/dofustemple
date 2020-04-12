<?php


namespace App\Repositories;


use App\Models\Almanax;
use App\Repositories\Interfaces\AlmanaxRepositoryInterface;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use DateTimeZone;
use Illuminate\Database\Eloquent\Collection;

class AlmanaxRepository implements AlmanaxRepositoryInterface
{

    public function all(): Collection
    {
        return Almanax::all();
    }

    public function pickNext($days = 28): Collection
    {
        $date = Carbon::today(new DateTimeZone('Europe/Paris'));
        $interval = CarbonInterval::days($days);
        return Almanax::
        whereDate('needed_by', '>', Carbon::yesterday(new DateTimeZone('Europe/Paris'))->toDateString())->
        whereDate('needed_by', '<', $date->add($interval)->toDateTimeString())->
        get();
    }
}
