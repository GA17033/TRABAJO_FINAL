<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

//agregue esta linea para que corra la migracion en la bd
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
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
        //Paginator::useBootstrap();
        
        //modifique Index Lengths & MySQL / MariaDB
        //Por defecto, Laravel usa utf8mb4
        Schema::defaultStringLength(191);

    }
}
