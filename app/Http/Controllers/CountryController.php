<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CountryController extends Controller
{
    public function index()
    {
        // will delete name after returning it
        // and if name not exsists will return default
        $value = session()->pull('name', 'default');
        return $value;
    }

    public function create()
    {
        Country::factory()->count(100)->create();
    }

    public function store(Request $request)
    {
        //
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
