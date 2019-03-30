<?php

namespace App\Providers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        $tag = Tag::all();
        $posts = Post::all();
        View::share('categories', $categories);
        View::share('tags', $tag);
        View::share('posts', $posts);
        Schema::defaultStringLength(191);
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
