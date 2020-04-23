<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\AuthServiceProvider;
use Illuminate\Support\Facades\Route;
use App\Configs\Icon;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        view()->composer('*', function($view) {
            $view->with([
                            'controllerName' => AppServiceProvider::getFolderNameForView(),
                            'icon_delete' => Icon::ICON_DELETE,
                            'icon_add' => Icon::ICON_ADD,
                            'icon_edit' => Icon::ICON_EDIT,
                            'icon_save' => Icon::ICON_SAVE,
                            'icon_back' => Icon::ICON_BACK,
                            'icon_download' => Icon::ICON_DOWNLOAD,
                            'avatar_default' => Icon::ICON_AVATAT_DEFAULT,
                        ]
            );
        });
    }
    
    /**
     * 
     * @return string
     */
    public static function getFolderNameForView() {
        if(empty(Route::current()->controller)){
            return 'home';
        }
        $classControllerName = class_basename(Route::current()->controller);
        $controllerName = str_replace('Controller', '', $classControllerName);
        return strtolower($controllerName);
    }

}
