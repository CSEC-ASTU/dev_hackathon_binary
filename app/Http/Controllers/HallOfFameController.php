<?php

namespace App\Http\Controllers;

use App\Models\HallOfFame;
use Illuminate\Http\Request;

class HallOfFameController extends Controller
{
    public function home()
    {
        return view('halloffames.home');
    }

    public function show($id)
    {
        $event = HallOfFame::find($id);

        return view('halloffames.show')->with('event', $event);
    }

    public function add()
    {
        return view('halloffames.store');
    }
}
