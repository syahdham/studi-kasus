<?php

namespace App\Providers;

use App\Implementations\StatusPengajuanImpl;
use App\Interfaces\StatusPengajuanInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(StatusPengajuanInterface::class, StatusPengajuanImpl::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
