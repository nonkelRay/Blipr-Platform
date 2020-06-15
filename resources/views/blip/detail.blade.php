@extends('layouts.app')

@section('content')
{{-- <div class="blip-detail">
    <h1>Jamie XX</h1>
    <span class="subtitle">Ancienne Belgique </span>
    
    <video controls>
        <source src="{{ @asset('videos/test.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
    </video>
    <div class="info">
        <strong>Heel leuk moment</strong>
        <div class="icons">
            <img src="{{ @asset('images/happy_red.png') }}" alt="">
            <div class="heart">
                <img src="{{ @asset('images/heart.png') }}" alt="">
                <span>124</span>
            </div>
            <img src="{{ @asset('images/fav.png') }}" alt="">
        </div>
        
    </div>
</div> --}}
<div class="blip-detail">
    <h1>{{ $blip->event->artist }}</h1>
    <span class="subtitle">{{ $blip->event->venue_name }} </span>
    
    <video controls>
        <source src="{{ asset('storage/' . $blip->video)  }}" type="video/mp4">
            Your browser does not support the video tag.
    </video>
    <div class="info">
        <strong>{{ $blip->description }}</strong>
        <div class="icons">
            @switch($blip->feeling)
                @case("happy")
                    <img src="{{ @asset('images/happy_red.png') }}" alt="">
                    @break
                @case("emotional")
                    <img src="{{ @asset('images/emotional_red.png') }}" alt="">
                    @break
                @case("energetic")
                    <img src="{{ @asset('images/energetic_red.png') }}" alt="">
                    @break
                @case("relaxed")
                    <img src="{{ @asset('images/relaxed_red.png') }}" alt="">
                    @break
                @default
                    <img src="{{ @asset('images/happy_red.png') }}" alt="">
            @endswitch
            <img src="{{ @asset('images/happy_red.png') }}" alt="">
            <div class="heart">
                <img src="{{ @asset('images/heart.png') }}" alt="">
                <span>{{ $blip->heartbeat }}</span>
            </div>
            <img src="{{ @asset('images/fav.png') }}" alt="">
            {{-- <img class="{{ !( $blip->fav ) ? 'not' : '' }}" src="{{ @asset('images/fav.png') }}" alt=""> --}}
        </div>
        
    </div>
</div>
@endsection