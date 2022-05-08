<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('users.home');
    }

    public function show($id)
    {
        $event = User::find($id);

        return view('users.show')->with('event', $event);
    }

    public function add()
    {
        return view('users.store');
    }

    public function profile()
    {
        return view('users.profile');
    }
}
