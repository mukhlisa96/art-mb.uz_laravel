<?php

namespace App\Providers;
use App\Project;
use App\ProjectCategory;
use App\Post;
use App\Social;
use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        //   $this->app->bind('path.public', function() {
        //   return base_path('public_html');
        //      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('*', function($view){
                $posts=Post::orderBy('created_at','desc')->take(3)->get();
                $projs=Project::orderBy('created_at','desc')->take(5)->get();
                $cats = ProjectCategory::all();
                $socials = Social::all();
                $view -> withposts($posts)->withprojs($projs)->withcats($cats)->withsocials($socials);
        });
    }
}
