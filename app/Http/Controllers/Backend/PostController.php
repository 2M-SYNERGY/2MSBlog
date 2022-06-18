<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->user_id = auth()->id();
        $post->description = $request->description;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->slug = time() . '-' . Str::slug($request->title);
        $post->image = $request->file('image')->store('images/posts');
        $post->save();

        if ($post->save()) {
            flashy()->success('Post enrégistrée avec succès');
        } else {
            flashy()->error('Nous avons rencontré une erreur, veuillez réessayer!');
        }
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
