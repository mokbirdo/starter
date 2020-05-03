<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Str;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Event::listen('*', function ($eventName, array $data) {
            if ($eventName == "Illuminate\Console\Events\CommandFinished") {
                if (Str::startsWith($data[0]->command, 'migrate')) {
                    echo 'Run model parser!'.PHP_EOL;
                    echo Artisan::call('ide-helper:models -W').PHP_EOL;
                }
            }
        });
    }
}
