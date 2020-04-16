<?php


namespace App\Repositories;


use App\Models\Todo;
use App\Models\User;
use App\Repositories\Interfaces\TodoRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class TodoRepository implements TodoRepositoryInterface
{

    public function all(): Collection
    {
        return Todo::all();
    }

    public function getByUser(User $user): Collection
    {
        return $user->todos()->get();
    }

    public function getFinished(): Collection
    {
        return Todo::where('finished', 1)->get();
    }

    public function getNotFinished(): Collection
    {
        return Todo::where('finished', 0)->get();
    }
}
