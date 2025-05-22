<?php

namespace Mgakif\LaravelGoogleLogin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class GoogleLoginServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->publishes([
            __DIR__ . '/../config/googlelogin.php' => config_path('googlelogin.php'),
        ], 'config');
    }
}
