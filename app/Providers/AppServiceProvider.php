<?php

namespace App\Providers;

use App\Models\Album;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Pagination\Paginator;

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

        View()->composer('*', function ($view) {
            $category = Category::where('status_category',1)->get();
            $view->with('category',$category);
        });


        View()->composer('*', function ($view) {
            $singer = Singer::where('status_singer',1)->get();
            $view->with('singer',$singer);
        });


        View()->composer('*',function($view){
            $album = Album::where('status_album',1)->limit(12)->get();
            $view->with('album',$album);
        });

    }
}
