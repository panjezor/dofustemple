<?php


namespace App\Repositories\Interfaces;


use App\Models\Monster;
use App\Models\MonsterList;
use Illuminate\Database\Eloquent\Collection;

interface MonsterOwnershipRepositoryInterface
{
    /** Return a collection of all ownerships (all relations)
     * @return mixed
     */
    public function all(): Collection;

    /** Return a collection of all ownerships with a given monster
     * @param Monster $monster
     * @return Collection
     */
    public function getByMonster(Monster $monster): Collection;

    /** Return a collection of all the ownerships for a specific list.
     * @param MonsterList $monsterList
     * @return Collection
     */
    public function getByList(MonsterList $monsterList): Collection;
}
