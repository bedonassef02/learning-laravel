<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use function Sodium\increment;

class CountryController extends Controller
{
    public function index(Request $request)
    {
//        dd($request->only(['name']));
//        dd($request->has(['name', 'email']));
//        dd($request->hasAny(['name', 'email']));

//        $request->merge(['age'=>'20']);
        $request->mergeIfMissing(['age'=>'20']);
        dd($request->all());
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
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
