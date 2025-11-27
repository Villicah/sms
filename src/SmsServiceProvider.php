<?php

namespace Villicah\Sms;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Sms::class, function () {
            return new Sms;
        });
    }

    public function boot()
    {
        // Nothing to publish; package is fully self-contained
    }
}
