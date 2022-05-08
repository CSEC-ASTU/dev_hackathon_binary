<?php

namespace App\Http\Controllers;

use App\Models\SubDivision;
use Illuminate\Http\Request;

class SubDivisionController extends Controller
{
    public function home()
    {
        return view('subdivisions.home');
    }

    public function show($id)
    {
        $event = SubDivision::find($id);

        return view('subdivisions.show')->with('event', $event);
    }

    public function add()
    {
        return view('subdivisions.store');
    }
}
