<?php

namespace App\Providers;

use App\Models\Admin\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\view;

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
        View::composer("theme.lte.menu", function($view){
            $menus = Menu::getMenu();
            $view->with('menusComposer', $menus);

        });
        View::share('theme', 'lte');
    }
}
