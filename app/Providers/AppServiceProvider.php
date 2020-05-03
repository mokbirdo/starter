<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.protocol_force')) {
            URL::forceScheme(config('app.protocol_force'));
        }

        // ToDo: eloquent bug workaround, if it stiil need?
        Builder::defaultStringLength(191); // Update defaultStringLength
    }
}
