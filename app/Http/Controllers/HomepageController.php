<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $keyword = null;
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }

        $cat = null;
        if (isset($_GET['cat'])) {
            $cat = $_GET['cat'];
        }

        $posts = Post::when($keyword, function ($query, $keyword) {
                return $query->where('title', 'like', '%' . $keyword . '%');
            })->latest()->paginate(12);

        $categories = Category::get();
        // return $posts;
        // return $categories;
        return view('frontend.homepage', compact('posts', 'categories'));
    }

    public function singlePost(Request $request, $id)
    {
        $post = Post::firstWhere('id', $id);
        $categories = Category::get();
        // return $post;
        return view('frontend.singel-blog', compact('post','categories'));
    }
}
