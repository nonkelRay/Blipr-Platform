<?php

namespace App\Http\Controllers;

use App\Event;

class LandingController extends Controller
{
    /**
     * Show the landing page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('landing')->with('events', Event::all());
    }
}
