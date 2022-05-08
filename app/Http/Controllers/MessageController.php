<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function home()
    {
        return view('messages.home');
    }

    public function show($id)
    {
        $event = Message::find($id);

        return view('messages.show')->with('event', $event);
    }

    public function add()
    {
        return view('messages.store');
    }
}
