<?php

namespace saberLiou\Debut;

use Illuminate\Support\ServiceProvider;

class DebutServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'saberliou');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'saberliou');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadRoutesFrom(__DIR__.'/routes.php');

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
        $this->mergeConfigFrom(__DIR__.'/../config/debut.php', 'debut');

        // Register the service the package provides.
        $this->app->singleton('debut', function ($app) {
            return new Debut;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['debut'];
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
            __DIR__.'/../config/debut.php' => config_path('debut.php'),
        ], 'debut.config');

        // Publishing the controllers.
        $this->publishes([
            __DIR__.'/../app/Http/Controllers' => app_path('Http/Controllers/Vendor/saberLiou'),
        ], 'debut.controllers');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/saberliou/debut'),
        ], 'debut.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/saberliou'),
        ], 'debut.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/saberliou'),
        ], 'debut.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
