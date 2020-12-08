<?php

namespace Chuckbe\ChuckcmsModulePos;

use Chuckbe\ChuckcmsModulePos\Commands\InstallModulePos;
use Illuminate\Support\ServiceProvider;

class ChuckcmsModulePosServiceProvider extends ServiceProvider 
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        
        $this->publishes([
            __DIR__.'/../assets' => public_path('chuckbe/chuckcms-module-pos'),
        ], 'chuckcms-module-pos');

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallModulePos::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {   
        $this->loadViewsFrom(__DIR__.'/views', 'chuckcms-module-pos');

        
    }
}