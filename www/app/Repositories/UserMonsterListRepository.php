<?php


namespace App\Repositories;


use App\Models\UserMonsterList;
use App\Repositories\Interfaces\UserMonsterListRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserMonsterListRepository implements UserMonsterListRepositoryInterface
{

    /**
     * @return UserMonsterList[]|Collection
     */
    public function all()
    {
        return UserMonsterList::all();
    }
}
