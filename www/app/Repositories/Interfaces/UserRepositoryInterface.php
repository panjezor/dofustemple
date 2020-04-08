<?php


namespace App\Repositories\Interfaces;


use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface
{
    public function all(): Collection;

    public function getDevs(): Collection;

    public function getUsers(): Collection;

    public function getByLocale(string $locale): Collection;
}
