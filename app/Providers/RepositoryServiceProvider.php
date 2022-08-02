<?php

namespace App\Providers;

use App\Interfaces\Repositories\ReferralsRepositoryInterface;
use App\Interfaces\Repositories\UsersRepositoryInterface;
use App\Repositories\ReferralsRepository;
use App\Repositories\UsersRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
        $this->app->bind(ReferralsRepositoryInterface::class, ReferralsRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
