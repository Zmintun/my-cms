<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Tag;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::get()->take(6);
        $categories = Category::get()->take(6);
        $tags = Tag::all();
        return view('index', compact('posts', 'categories', 'tags'));
    }
}
