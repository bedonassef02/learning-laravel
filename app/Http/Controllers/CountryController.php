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
        // effecient time for lazy collections
        $countries = Country::take(1000)->cursor()->filter(function ($element) {
            return $element->id > 200;
        });

        return view('countries', compact('countries'));
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
