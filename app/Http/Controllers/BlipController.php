<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blip;

class BlipController extends Controller
{
    /**
     * Show the blip dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Eloquent query in the db where user_id = the same as the logged in user
        $blips = Blip::where('user_id', Auth::user()->id)->get();

        return view('blip.home')->with('blips', $blips);
    }

    public function detail()
    {
        return view('blip.detail');
    }

    public function createBlip()
    {
        return view('blip.create');
    }

    public function storeBlip(Request $request)
    {
        $this->validate($request, [
            'video' => 'required',
            'description' => 'required',
            'feeling' => 'required',
        ]);

        $video = $request->video->store('blips');

        // add data to new Event
        $blip = new Blip();
        $blip->video = $video;
        $blip->description = $request->input('description');
        $blip->feeling = $request->input('feeling');
        $blip->user_id = Auth::user()->id;
        $blip->active = true;
        $blip->save();

        // flash message laten zien met een alert, deze blijft er maar even staan door -> flash()
        $request->session()->flash('message', 'Blip saved');

        return redirect('user/blips');
    }
}
