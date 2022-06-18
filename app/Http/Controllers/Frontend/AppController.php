<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $latest_posts = Post::orderBy('created_at', 'desc')->take(6)->get();
        return view('welcome', compact('latest_posts'));
    }

    public function detailsPost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $post->increment('view');
        return view('details-post', compact('post'));
    }
}
