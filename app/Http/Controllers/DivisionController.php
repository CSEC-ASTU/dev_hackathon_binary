<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function home()
    {
        return view('divisions.home');
    }

    public function show($id)
    {
        $event = Division::find($id);

        return view('divisions.show')->with('event', $event);
    }

    public function add()
    {
        return view('divisions.store');
    }
}
