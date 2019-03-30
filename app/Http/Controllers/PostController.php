<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function detail($slug) {
        $post = Post::where('slug', $slug)->first();
        return view('single_post', compact('post'));
    }

    public function postByCategory($slug) {
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->get();
        return view('post_detail', compact('posts'));
    }

    public function postByTag($slug) {
        $tag = Tag::where('slug', $slug)->first();
        $posts = $tag->posts()->get();
        return view('post_detail', compact('posts'));
    }
}
