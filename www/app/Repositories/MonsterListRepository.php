<?php


namespace App\Repositories;


use App\Models\MonsterList;
use App\Models\User;
use App\Repositories\Interfaces\MonsterListRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class MonsterListRepository implements MonsterListRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function all(): Collection
    {
        return MonsterList::all();
    }

    /**
     * @inheritDoc
     */
    public function getByUser(User $user): Collection
    {
        return $user->lists;
    }

    /**
     * @inheritDoc
     */
    public function getByVersion($int): Collection
    {
        return MonsterList::where('version', $int)->get();
    }
}
