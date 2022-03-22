<?php

namespace App\Providers;


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
    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repository\Interfaces\UserRepositoryInterface', 'App\Repository\Eloquent\UserRepository');
    }
}