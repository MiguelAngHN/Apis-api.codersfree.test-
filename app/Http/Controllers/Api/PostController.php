<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts=Post::all();
                             
        return $posts;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:posts',
            'extract' => 'required|max:255',
            'body' => 'required|max:255',
            'category_id' => 'required',
            'user_id' => 'required',
        ]);

        $posts=Post::create($request->all());

        return $posts;
        // return $request->all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //

        return $post;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //

        $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|max:255|unique:categories,slug,'.$post->id,
            'extract' => 'required|max:255',
            'body' => 'required|max:255',
            'category_id' => 'required',
            'user_id' => 'required',
            
        ]);

        $post->update($request->all());

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //

        $post->delete();
        return $post;
    }
}
