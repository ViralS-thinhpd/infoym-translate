<?php

namespace Thinhpd\Translate;

use Illuminate\Support\ServiceProvider;

class TranslateServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'thinhpd');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'thinhpd');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/translate.php', 'translate');

        // Register the service the package provides.
        $this->app->singleton('translate', function ($app) {
            return new Translate;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['translate'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/translate.php' => config_path('translate.php'),
        ], 'translate.config');

        $this->publishes([
            __DIR__.'/../src/app' => base_path('app/'),
        ], 'translate.app');

        $this->publishes([
            __DIR__.'/../src/resources/lang' => resource_path('lang/'),
        ], 'translate.lang');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/thinhpd'),
        ], 'translate.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/thinhpd'),
        ], 'translate.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/thinhpd'),
        ], 'translate.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
