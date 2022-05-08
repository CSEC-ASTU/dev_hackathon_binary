<?php

namespace App\Http\Controllers;

use App\Models\Recomendation;
use Illuminate\Http\Request;

class RecomendationController extends Controller
{
    public function requestHome()
    {
        return view('requests.home');
    }

    public function requestShow($id)
    {
        $event = Recomendation::find($id);

        return view('requests.show')->with('event', $event);
    }

    public function requestAdd()
    {
        return view('requests.store');
    }
}
