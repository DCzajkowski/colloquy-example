<?php

namespace App\Providers;

use Colloquy\Colloquy;
use Colloquy\Drivers\FileDriver;
use App\SessionIdentifierResolver;
use Illuminate\Support\ServiceProvider;

class ColloquyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Colloquy::bind(
            'session',
            new SessionIdentifierResolver,
            new FileDriver(storage_path('app/contexts'))
        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
