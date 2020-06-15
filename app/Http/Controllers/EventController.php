<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;

class EventController extends Controller
{
    public function __construct()
    {
        // only logged in venues can visit this page
        $this->middleware('venueAuth');
    }

    /**
     * Show the events dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Eloquent query in the db where venue_id = the same as the logged in venue
        $events = Event::where('venue_id', Auth::guard('venue')->user()->id)->get();

        return view('event.events')->with('events', $events);
    }

    public function detail($id)
    {
        $event = Event::where('id', $id)->first();

        return view('event.detail')->with('event', $event);
    }

    public function createEvent()
    {
        return view('event.create');
    }

    public function storeEvent(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'artist' => 'required',
            'date' => 'required',
            'image' => 'required|image',
        ]);

        $image = $request->image->store('public/events');

        // add data to new Event
        $event = new Event();
        $event->title = $request->input('title');
        $event->artist = $request->input('artist');
        $event->date = $request->input('date');
        $event->image = $image;
        $event->link_socials = $request->input('link_socials');
        $event->link_tickets = $request->input('link_tickets');
        $event->duration = $request->input('duration');
        $event->video_link = $request->input('video_link');
        $event->venue_id = Auth::guard('venue')->user()->id;
        $event->venue_name = Auth::guard('venue')->user()->name;
        $event->active = true;
        $event->save();

        // flash message laten zien met een alert, deze blijft er maar even staan door -> flash()
        $request->session()->flash('message', 'Event posted');

        return redirect('venue/events');
    }

    public function uploadVideo($id)
    {
        $event = Event::where('id', $id)->first();

        return view('event.upload')->with('event', $event);
    }

    public function storeVideo(Request $request, $id)
    {
        $event = Event::where('id', $id)->first();

        $video = $request->video->store('public/video_link');

        $event->video_link = $video;
        $event->save();

        // flash message laten zien met een alert, deze blijft er maar even staan door -> flash()
        $request->session()->flash('message', 'Video uploaded');

        return redirect('venue/events');
    }
}
