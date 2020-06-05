<?php

namespace App\Http\Controllers;

class VenueController extends Controller
{
    public function __construct()
    {
        // only logged in venues can visit this page
        $this->middleware('venueAuth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('venue.home');
    }
}
