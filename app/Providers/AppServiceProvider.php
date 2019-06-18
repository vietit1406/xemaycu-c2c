<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Hang;
use App\Phankhoi;
use App\Loaixe;

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
        view()->composer('header',function($view){
            $hang = Hang::all();      
            $view->with('hang',$hang);
        });

        view()->composer('header',function($view){      
            $phankhoi = Phankhoi::all();   
            $view->with('phankhoi',$phankhoi);
        });

        view()->composer('header',function($view){      
            $loaixe = Loaixe::all();   
            $view->with('loaixe',$loaixe);
        });

        view()->composer('footer',function($view){
            $hang = Hang::all();      
            $view->with('hang',$hang);
        });
    }
}
