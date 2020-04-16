<?php


namespace App\Repositories\Interfaces;


use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface TodoRepositoryInterface
{
    public function all(): Collection;

    public function getByUser(User $user): Collection;

    public function getFinished(): Collection;

    public function getNotFinished(): Collection;
}
