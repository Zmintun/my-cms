<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        $postCount = Post::get()->count();
        $categoryCount = Category::get()->count();
        $tagCount = Tag::get()->count();
        $userCount = User::get()->count();
        return view('admin.home', compact('postCount', 'categoryCount', 'tagCount', 'userCount'));
    }
}
