<?php

namespace App\Providers;

use Inertia\Inertia;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use NascentAfrica\Jetstrap\JetstrapFacade;




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
        /* $version = "1.0";
        Inertia::version($version); */
        //Schema::defaultstringLength(191);
        //Paginator::useBootstrap();
        JetstrapFacade::useCoreUi3();
        //JetstrapFacade::useAdminLte3();

    }
}
