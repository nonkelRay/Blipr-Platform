<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class LandingController extends Controller
{
    /**
     * Show the landing page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // get 10 events from today or in the future
        $events = Event::whereDate('date', '>=', Carbon::today())->take(10)->get();

        return view('landing')->with('events', $events);
    }

    public function events()
    {
        return view('calendar')->with('events', Event::all());
    }

    public function searchEvent(Request $request)
    {
        // user input in var
        $input = $request->input('search');

        // search in DB table events where artist is the same as the input of the user
        $events = Event::where('artist', 'LIKE', '%'.$input.'%')->get();

        return view('calendar')->with('events', $events);
    }
}
