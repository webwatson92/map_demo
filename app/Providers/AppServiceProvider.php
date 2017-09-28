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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */

    //ICI on fait le lien entre l'interface et la classe
    public function register()
    {
        $this->app->bind(
            'App\Repositories\PhotosRepositoryInterface',
            'App\Repositories\PhotosRepository'
        );
    }

}
