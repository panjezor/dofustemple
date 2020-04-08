<?php


namespace App\Repositories;


use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{

    public function all(): Collection
    {
        return User::all();
    }

    public function getDevs(): Collection
    {
        return User::where('dev', true)->get();
    }

    public function getUsers(): Collection
    {
        return User::where('dev', false)->get();
    }

    public function getByLocale(string $locale): Collection
    {
        return User::where('locale', $locale)->get();
    }
}
