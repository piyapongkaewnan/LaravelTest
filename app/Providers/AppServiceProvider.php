<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      $this->publishes([base_path('vendor/frameworks/jquery') => public_path('vendor/jquery')],'public');
      $this->publishes([base_path('vendor/fortawesome/font-awesome') => public_path('vendor/font-awesome')],'public');
    //  $this->publishes([base_path('vendor/bootstrap-validator') => public_path('vendor/bootstrap-validator')],'public');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
