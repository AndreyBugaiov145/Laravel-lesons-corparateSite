<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Blade;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Blade::directive('set',function ($exp){
            list($name,$val) = explode(',',$exp);

            return "<? $name = $val ?>";
        });

        DB::listen(function ($query){
           // echo '<h1>'.$query->sql.'</h1>';
    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
