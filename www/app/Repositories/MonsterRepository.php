<?php


namespace App\Repositories;


use App\Models\Monster;
use App\Models\MonsterList;
use App\Repositories\Interfaces\MonsterRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MonsterRepository implements MonsterRepositoryInterface
{

    public function all(): Collection
    {
        return Monster::all();
    }

    public function archMonsters(): Collection
    {
        return Monster::where('type', Monster::ARCH)->orderBy('monster_name')->get();
    }

    public function normalMonsters(): Collection
    {
        return Monster::where('type', Monster::NORMAL)->orderBy('monster_name')->get();
    }

    public function dungeonMonsters(): Collection
    {
        return Monster::where('type', Monster::DUNGEON)->orderBy('monster_name')->get();
    }

    public function getByList(MonsterList $monsterList): Collection
    {
        return $monsterList->monsters;
    }
}
