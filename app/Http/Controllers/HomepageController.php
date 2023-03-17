<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(12);
        $categories = Category::get();
        // return $posts;
        // return $categories;
        return view('frontend.homepage', compact('posts','categories'));
    }
}
