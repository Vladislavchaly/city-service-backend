<?php

namespace App\Providers;

use App\Interfaces\Repositories\Eloquent\EloquentRepositoryInterface;
use App\Interfaces\Repositories\Eloquent\ReferralsRepositoryInterface;
use App\Interfaces\Repositories\Eloquent\ReferralTokensRepositoryInterface;
use App\Interfaces\Repositories\Eloquent\UsersRepositoryInterface;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\Eloquent\ReferralsRepository;
use App\Repositories\Eloquent\ReferralTokensRepository;
use App\Repositories\Eloquent\UsersRepository;
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
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UsersRepositoryInterface::class, UsersRepository::class);
        $this->app->bind(ReferralsRepositoryInterface::class, ReferralsRepository::class);
        $this->app->bind(ReferralTokensRepositoryInterface::class, ReferralTokensRepository::class);
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
