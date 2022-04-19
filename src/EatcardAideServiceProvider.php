<?php

namespace Weboccult\EatcardAide;

use Illuminate\Support\ServiceProvider;

class EatcardAideServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'eatcard-aide');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'eatcard-aide');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
//            $this->publishes([
//                __DIR__.'/../config/config.php' => config_path('eatcard-aide.php'),
//            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/eatcard-aide'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/eatcard-aide'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/eatcard-aide'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
//        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'eatcard-aide');

        // Register the main class to use with the facade
        $this->app->singleton('eatcard-aide', function () {
            return new EatcardAide;
        });
    }
}
