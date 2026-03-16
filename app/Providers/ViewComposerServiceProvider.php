<?php

namespace App\Providers;

use App\Models\SettingModel;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    var $setting;
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        
        //
            View::composer('errors::404', function ($view) {
                $setting=SettingModel::getSingle();
                $view->with(['setting'=>$setting,'version'=>config('siteconfig.version')]);
            });
    }
}
