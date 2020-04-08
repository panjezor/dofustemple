<?php


namespace App\Repositories\Interfaces;


use App\Models\MonsterList;
use Illuminate\Database\Eloquent\Collection;

interface MonsterRepositoryInterface
{
    public function all(): Collection;

    public function archMonsters(): Collection;

    public function normalMonsters(): Collection;

    public function dungeonMonsters(): Collection;

    public function getByList(MonsterList $monsterList): Collection;
}
