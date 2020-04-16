<?php


namespace App\Repositories;


use App\Models\Monster;
use App\Models\MonsterList;
use App\Models\MonsterOwnership;
use App\Repositories\Interfaces\MonsterOwnershipRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MonsterOwnershipRepository implements MonsterOwnershipRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function all(): Collection
    {
        return MonsterOwnership::all();
    }

    /**
     * @inheritDoc
     */
    public function getByMonster(Monster $monster): Collection
    {
        return MonsterOwnership::where('monster_id', $monster->id)->get();
    }

    /**
     * @inheritDoc
     */
    public function getByList(MonsterList $monsterList): Collection
    {
        return MonsterOwnership::where('monster_list_id', $monsterList->id)->get();
    }
}
