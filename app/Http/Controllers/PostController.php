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
        return view('posts.index',compact('posts'));
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
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        DB::table('posts')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return 'Done!';
    }

    public function destroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return 'Done!';
    }

    public function deleteAll()
    {
        DB::table('posts')->delete();
        return redirect()->back();
    }

    public function truncate()
    {
        DB::table('posts')->truncate();
        return 'Done!';
    }


}

