<?php

namespace Ktcd\Messages;

use Illuminate\Support\ServiceProvider;

class MessagesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/Config/ktcd_messages.php', 'ktcd_messages');
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');
        $this->loadTranslationsFrom(__DIR__ . '/Resources/lang', 'messages');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // $this->publishes([
        //     __DIR__.'/config/svknd_feed.php' => config_path('svknd_feed.php'),
        // ], 'svknd-feed-config');

        // $this->publishes([
        //     __DIR__ . '/database/migrations/' => database_path('migrations'),
        // ], 'svknd-feed-migrations');
    }
}
