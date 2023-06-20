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
        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return strtoupper($value);
            });
        });
        $collection = collect(['bedo', 'test', null])->toUpper();
        dd($collection->all());
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
