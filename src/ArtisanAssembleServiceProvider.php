<?php

namespace Jdw5\ArtisanAssemble;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Jdw5\ArtisanAssemble\Console\Commands\EndpointMakeCommand;
use Jdw5\ArtisanAssemble\Console\Commands\EnumMakeCommand;
use Jdw5\ArtisanAssemble\Console\Commands\FilterMakeCommand;
use Jdw5\ArtisanAssemble\Console\Commands\HashMakeCommand;
use Jdw5\ArtisanAssemble\Console\Commands\ModalMakeCommand;
use Jdw5\ArtisanAssemble\Console\Commands\PageMakeCommand;

// use Illuminate\Foundation\Console\AboutCommand;

class ArtisanAssembleServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

        // AboutCommand::add('My Package', fn () => ['Version' => '1.0.0']);

        $this->publishes([
            __DIR__.'/config/artisan-assemble.php' => config_path('artisan-assemble.php'),
            // __DIR__.'../stubs/' => stub_path('artisan-assemble.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                EndpointMakeCommand::class,
                EnumMakeCommand::class,
                FilterMakeCommand::class,
                HashMakeCommand::class,
                ModalMakeCommand::class,
                PageMakeCommand::class,    
            ]);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
    }
}
