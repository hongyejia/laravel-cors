<?php

namespace Hongyejia\LaravelCors;


use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class ServiceProvider.
 *
 * @author hongye <aqm@live.com>
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Boot the provider.
     */
    public function boot()
    {
    }


    /**
     * Register the provider.
     */
    public function register()
    {
        $source = realpath(__DIR__.'/config.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('cors.php')], 'laravel-cors');
        }

        $this->mergeConfigFrom($source, 'cors');
    }

}
