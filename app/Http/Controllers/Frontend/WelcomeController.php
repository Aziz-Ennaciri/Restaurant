<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $specials = Category::where('name', 'specials')->first();

        if ($specials) {
            return view('welcome', compact('specials'));
        } else {
            return view('welcome')->with('message', 'No specials available');
        }
    }

    public function thankyou()
    {
        return view('thankyou');
    }
}
