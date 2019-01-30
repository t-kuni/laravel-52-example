<?php

namespace App\Providers;

use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('CommentRepositoryInterface', CommentRepository::class);
        $this->app->bind('UserRepositoryInterface', UserRepository::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
