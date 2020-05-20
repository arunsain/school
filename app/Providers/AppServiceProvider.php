<?php

namespace App\Providers;
use App\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Builder;
use App\Http\View\Composer\ChannelComposer;

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
        //
         Builder::defaultStringLength(191); // Update defaultStringLength

        // option 1 every single view
         //view::share('page',Page::where('id',1)->first());


         // option 2 granular views 
         // view::composer(['fronthtml.pages.indexFront','fronthtml.pages.events','fronthtml.pages.singleEvent','fronthtml.pages.admission','fronthtml.pages.gallery','fronthtml.pages.aboutUs','fronthtml.pages.contactUs'],function($view){
         //    $view->with('page',Page::where('id',1)->first());
         // });


         // option 3 granular views with wildcard
         // view::composer(['fronthtml.pages.*'],function($view){
         //    $view->with('page',Page::where('id',1)->first());
         // });



           // option 4 channel class
         view::composer(['fronthtml.pages.*'],ChannelComposer::class);
    }
}
