<?php

namespace App\Providers;

use App\Repositories\AlmanaxRepository;
use App\Repositories\Interfaces\AlmanaxRepositoryInterface;
use App\Repositories\Interfaces\MonsterListRepositoryInterface;
use App\Repositories\Interfaces\MonsterOwnershipRepositoryInterface;
use App\Repositories\Interfaces\MonsterRepositoryInterface;
use App\Repositories\Interfaces\TodoRepositoryInterface;
use App\Repositories\Interfaces\UserMonsterListRepositoryInterface;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Repositories\MonsterListRepository;
use App\Repositories\MonsterOwnershipRepository;
use App\Repositories\MonsterRepository;
use App\Repositories\TodoRepository;
use App\Repositories\UserMonsterListRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AlmanaxRepositoryInterface::class, AlmanaxRepository::class
        );
        $this->app->bind(MonsterListRepositoryInterface::class, MonsterListRepository::class
        );
        $this->app->bind(MonsterOwnershipRepositoryInterface::class, MonsterOwnershipRepository::class
        );
        $this->app->bind(MonsterRepositoryInterface::class, MonsterRepository::class
        );
        $this->app->bind(UserMonsterListRepositoryInterface::class, UserMonsterListRepository::class
        );
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class
        );
        $this->app->bind(TodoRepositoryInterface::class, TodoRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
