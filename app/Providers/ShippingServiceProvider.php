<?php

namespace App\Providers;

use App\Implementations\Shipping\NoShippingImpl;
use App\Implementations\Shipping\ShippingJneImpl;
use App\Implementations\Shipping\ShippingPosImpl;
use App\Implementations\Shipping\ShippingTikiImpl;
use App\Interfaces\ShippingInterface;
use Illuminate\Support\ServiceProvider;

class ShippingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ShippingInterface::class, function () {

            $segment = request()->segment('2');
            switch ($segment) {
                case 'jne':
                    return new ShippingJneImpl();
                case 'tiki':
                    return new ShippingTikiImpl();
                case 'pos':
                    return new ShippingPosImpl();
                default:
                    return new NoShippingImpl();
            }
        });
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
