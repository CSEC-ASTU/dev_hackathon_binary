<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * index function.
     */
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('home');
        }else{
            $feed = Feed::where('is_active', 1)->get();
            return view('home')->with('feeds', $feed);
        }
    }
}
