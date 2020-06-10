@extends('layouts.venue')

@section('content')
<div class="main-content events">
    <div class="container">
        <p>Events</p>
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        @forelse ($events as $event)
            <div>
                <h1>{{ $event->title }}</h1>
                <h4>{{ $event->artist }}</h2>   
                <img src="{{ asset('storage/' . $event->image) }}" width="60px" height="60px" alt="">
                <p> {{ $event->venue_name }}</p>
            </div>
        @empty
            <div>
                No upcoming events
            </div>
        @endforelse
    </div>    
</div>
@endsection