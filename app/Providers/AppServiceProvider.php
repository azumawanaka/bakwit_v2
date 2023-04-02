<?php

namespace App\Providers;

use App\Models\Notification;
use App\Models\Barangay;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();

        view()->share('barangays', Barangay::orderBy('name', 'asc')->get());
        view()->share('notifications', Notification::all());
    }
}
