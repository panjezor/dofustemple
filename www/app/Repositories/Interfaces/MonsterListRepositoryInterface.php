<?php


namespace App\Repositories\Interfaces;


use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface MonsterListRepositoryInterface
{
    /** Return collection of all lists
     * @return Collection
     */
    public function all(): Collection;

    /** Return collection of lists assigned to the user
     * @param User $user
     * @return Collection
     */
    public function getByUser(User $user): Collection;

    /** Return collection of lists for given version
     * @param $int
     * @return Collection
     */
    public function getByVersion($int): Collection;

}
