<?php


namespace App\Repositories\Interfaces;


use Illuminate\Database\Eloquent\Collection;

interface AlmanaxRepositoryInterface
{
    public function all(): Collection;

    public function pickNext($days): Collection;
}
