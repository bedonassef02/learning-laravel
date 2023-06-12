<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = "All Posts";
        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        $posts = "New Post With ID : " . $id;
        return view('posts', compact('posts'));
    }
}
