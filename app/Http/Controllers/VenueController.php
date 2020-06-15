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
<<<<<<< HEAD
     * Show the venue dashboard.
=======
     * Show the application dashboard.
>>>>>>> parent of 7fcf52d... Merge pull request #5 from nonkelRay/revert-4-feature/venue-can-login
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('venue.home');
    }
}
