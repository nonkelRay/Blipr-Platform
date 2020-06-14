@extends('layouts.venue')

@section('content')
<div class="main-content events-venue-detail">
    <div class="container">
        <img class="event-picture" src="{{ asset('storage/' . $event->image) }}" alt="">  
        {{-- <img class="event-picture" src="{{ asset('images/mic.png') }}" alt=""> --}}
        <div class="info">
            <h1>{{ $event->artist }}</h1>
            <p>{{ $event->title }} @ {{ $event->venue_name }} </p>
            <p>{{ $event->date }}</p>
            <a href="{{ url('venue/events/'.$event->id.'/upload') }}" class="btn">upload recording</a>
        </div>
    </div> 
</div>
@endsection