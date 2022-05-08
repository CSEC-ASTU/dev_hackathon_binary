<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function home()
    {
        return view('reports.home');
    }

    public function show($id)
    {
        $event = Report::find($id);

        return view('reports.show')->with('event', $event);
    }

    public function add()
    {
        return view('reports.store');
    }
}
