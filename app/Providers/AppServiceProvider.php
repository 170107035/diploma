<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Arr;
use App;

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
        $data = [
            'global' => [
                'menu' => [
                    'tours' => App\Tour::take(6)->get(),
                    'places' => App\Place::take(6)->get(),
                    'guidedtours' => App\GuidedTour::take(6)->get()
                ]
            ]
        ];
        View::composer('site.layouts.layout',function($view) use($data){
            $view->with($data);
        });
    }
}
