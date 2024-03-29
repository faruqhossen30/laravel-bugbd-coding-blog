<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Image;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();
        // return $posts;
        return view('user.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('user.post.create', compact('categories'));
        // return $categories;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);


        $thumbnail = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension = $imagethumbnail->getClientOriginalExtension();
            $thumbnail = Str::uuid() . '.' . $extension;
            Image::make($imagethumbnail)->save('uploads/post/' . $thumbnail);
        }


        $data = [
            'title'       => $request->title,
            'slug'        => Str::slug($request->title),
            'description' => $request->description,
            'user_id'     => Auth::user()->id,
            'thumbnail'   => $thumbnail

        ];
        Post::create($data);
        Session::flash('create');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::firstWhere('id', $id);
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::firstWhere('id', $id);
        $categories = Category::get();
        return view('user.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'       => 'required',
            'description' => 'required',
        ]);

        $thumbnail = null;
        if ($request->file('thumbnail')) {
            $imagethumbnail = $request->file('thumbnail');
            $extension      = $imagethumbnail->getClientOriginalExtension();
            $thumbnail      = Str::uuid() . '.' . $extension;
            Image ::make($imagethumbnail)->save('uploads/post/' . $thumbnail);
        }
        $data = [
            'title'       => $request->title,
            'slug'        => Str::slug($request->title),
            'description' => $request->description,
            'user_id'     => Auth::user()->id,
            'thumbnail'   => $thumbnail

        ];
        Post::firstWhere('id', $id)->update($data);
        Session::flash('update');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Post::firstwhere('id', $id)->thumbnail;
        // if($file){
        //     Storage::disk('public')->delete('blog/' . $file);
        // }
        Post::firstwhere('id', $id)->delete();
        Session::flash('delete');
        return redirect()->route('post.index');
    }
}
