<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if((env('APP_ENV') == 'local') && env('DB_CONNECTION') == 'mysql') {
            Schema::defaultStringLength(191); //MySQL older than the 5.7.7 release or MariaDB older than the 10.2.2 release
        }
        if(env('REDIRECT_HTTPS')) {
            URL::forceScheme('https'); //for heroku deployment
        }
    }

    public function register()
    {
        if(env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true); //for heroku deployment
        }
    }
}
