<?php


namespace App\Repositories;


use App\Models\Almanax;
use App\Repositories\Interfaces\AlmanaxRepositoryInterface;
use Carbon\Carbon;
use DateTimeZone;
use Illuminate\Database\Eloquent\Collection;

class AlmanaxRepository implements AlmanaxRepositoryInterface
{

    const TIMEZONE = 'Europe/Paris';

    public function all(): Collection
    {
        return Almanax::all();
    }

    public function pickNext($days = 28): Collection
    {
        $date = Carbon::today(new DateTimeZone(self::TIMEZONE));
        return Almanax::
        whereDate('needed_by', '>', ($date->subDay()->toDateString()))->
        whereDate('needed_by', '<', ($date->addDays($days + 1)->toDateString()))->
        get();
    }
}
