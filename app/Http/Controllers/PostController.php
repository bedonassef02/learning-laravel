<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class PostController extends Controller
{

    public function index()
    {
//        $value = url()->current();
//        $value = url()->full();
//        $value = route('posts.index');
        $value = URL::signedRoute('posts.index');

        return $value;
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
//        Post::findOrFail($id)->delete();
        $post = Post::destroy($id);
        return 'Done!';
    }


    public function archive()
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.deleted', compact('posts'));
    }

    public function restore($id)
    {
        Post::withTrashed()->where('id', $id)->restore();
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        Post::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back();
    }


}

