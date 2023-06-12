<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// php artisan make:controller UserProfileController -i
class UserProfileController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'User Profile';
    }
}
