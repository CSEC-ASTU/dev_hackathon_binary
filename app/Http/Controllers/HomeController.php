<?php

namespace App\Http\Controllers;

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
            return view('home');
        }
    }
}
