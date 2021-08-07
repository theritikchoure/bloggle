<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


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
        View::share('setting', \App\Models\Setting::first());

        $set = Setting::first();
        $rpl = $set->rec_post_limit;
        View::share('rec_post', \App\Models\Post::orderBy('id', 'desc')->limit($rpl)->get());

        $set = Setting::first();
        $ppl = $set->pop_post_limit;
        View::share('pop_post', \App\Models\Post::orderBy('views', 'desc')->limit($ppl)->get());

        $set = Setting::first();
        $cl = $set->cat_limit;
        View::share('category', \App\Models\Category::where('status', 1)->orderBy('name', 'asc')->limit($cl)->get());

    
        View::share('message', \App\Models\Message::orderBy('id', 'desc')->limit(3)->get());



    }
}
