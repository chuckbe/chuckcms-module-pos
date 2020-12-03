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