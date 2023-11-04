<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*',function($view){
            $view->with('categories', Category::where('status',1)->get());
        });

//        View::composer('website.master',function($view){
//            $view->with('categories', Category::where('status',1)->get(['id','name']));
//        });

//         View::composer(['website.master','admin.master'],function($view){
//            $view->with('categories', Category::where('status',1)->get(['id','name']));
//         });

    }
}
