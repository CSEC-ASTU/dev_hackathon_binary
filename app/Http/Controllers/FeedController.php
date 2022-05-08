<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Feed;
use App\Models\FeedFile;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    //

    public function home()
    {
        $feeds = Feed::all();

        return view('index')->with('feeds', $feeds);
    }

    public function add()
    {
        $events = Event::all();
        return view('feed.store')->with('events', $events);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'feed_files.*' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);


        if($request->has('issue_date')){
            $issue_date = \Carbon\Carbon::parse($request->get('issue_date'))->format('Y-m-d');
        }else{
            $issue_date = \Carbon\Carbon::parse(date('Y-m-d'))->format('Y-m-d');
        }

        $feed = new Feed([
            'user_id' => auth()->user()->id,
            'event_id'=> ($request->get('event_id') != null) ? $request->get('event_id') : null,
            'title' => $request->get('title'),
            'description'=> ($request->get('description') != null) ? $request->get('description') : null,
            'issue_date' => $issue_date
        ]);



        $feed->save();

        if($request->hasFile('feed_files')){
            $files = $request->file('feed_files');

            foreach ($files as $file) {
                $filename = time().'_'.$file->getClientOriginalName();
                $destinationPath = public_path('/uploads/feeds');
                $file->move($destinationPath, $filename);
                $feedfile = new FeedFile([
                    'feed_id' => $feed->id,
                    'file_name' => $filename,
                    'file_type' => $file->getClientMimeType(),
                    'file_size' => 10,
                    'file_path' => $destinationPath,
                ]);
                $feedfile->save();
            }

        }

        return redirect('/home')->with('success', 'Feed has been added');
    }

    public function show($id)
    {
        $feed = Feed::find($id);

        return view('feed.show')->with('feed', $feed);
    }
}
