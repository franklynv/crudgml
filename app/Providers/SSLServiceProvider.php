<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SSLServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app['request']->server->set('HTTPS', true);
    }
}