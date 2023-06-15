<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function index()
    {
//        $posts = Post::all();
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return response('Done!');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit($id)
    {
//        $post = Post::find($id);
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
//        $post = Post::find($id);
        $post = Post::where('id', $id)->first();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return 'Done!';
    }

    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return 'Done!';
    }



}

