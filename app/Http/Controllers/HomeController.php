<?php

namespace App\Http\Controllers;

use App\Blip;
use App\Event;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Eloquent query in the db where user_id = the same as the logged in user
        $blips = Blip::where('user_id', Auth::user()->id)->get();
        $events = Event::whereDate('date', '>=', Carbon::today())->take(10)->get();

        return view('user.home', compact('blips', 'events'));
    }
}
