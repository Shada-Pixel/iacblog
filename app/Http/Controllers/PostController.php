<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category')->get();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {

        $post = Post::create([
            'title' => $request->title,
            'shortdesc' => $request->shortdesc,
            'body' => $request->body,
            'user_id' => Auth::id(),
            'category_id' => $request->category,
            'posted_at' => $request->postedat
        ]);


        if ($post) {
            if ($request->hasFile('cover')) {
                $post->addMediaFromRequest('cover')->toMediaCollection('images');
            }
        }

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post = Post::with('category')->find($post->id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('posts.edit',compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        // if ($image) {
        //     if ($request->hasFile('image')) {
        //         $image->clearMediaCollection('images');
        //         $image->addMediaFromRequest('image')->toMediaCollection('images');
        //     }
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

   public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}