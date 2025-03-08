<?php

namespace AdarshG2316\MathLib\Providers;

use Illuminate\Support\ServiceProvider;
use AdarshG2316\MathLib\Libraries\MathLib; 

class MathLibServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('MathLib', function () {
            return new MathLib(); 
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->alias('MathLib', \AdarshG2316\MathLib\Facades\MathLib::class);
    }
}