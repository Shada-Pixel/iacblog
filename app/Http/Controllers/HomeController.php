<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Index or golpo
    public function index()
    {
        $posts = Post::whereHas('category', function($q){
            $q->where('id', '1');
        })->get();

        $category = Category::find(1);

        return view('index',compact('posts','category'));
    }


    public function showPost(Post $post)
    {
        return view('readpost',compact('post'));
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}