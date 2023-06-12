<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//  php artisan make:controller PostController -r
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'All Posts';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'Create New Post';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'Post With ID : ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'Edit Post With ID : ' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
