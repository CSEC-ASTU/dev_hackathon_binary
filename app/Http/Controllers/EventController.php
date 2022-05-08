<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function home()
    {
        return view('events.home');
    }

    public function show($id)
    {
        $event = Event::find($id);

        return view('events.show')->with('event', $event);
    }

    public function add()
    {
        return view('events.store');
    }
}
