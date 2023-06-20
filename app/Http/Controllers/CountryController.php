<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use function Sodium\increment;

class CountryController extends Controller
{
    public function index()
    {
        session()->flush('counter');
        return session()->get('counter');
    }

    public function create()
    {
        Country::factory()->count(100)->create();
    }

    public function store(Request $request)
    {
        dd($request->path());
    }

    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        //
    }

    public function update(Request $request, Country $country)
    {
        //
    }

    public function destroy(Country $country)
    {
        //
    }
}
