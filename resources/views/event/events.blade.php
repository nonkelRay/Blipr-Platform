@extends('layouts.venue')

@section('content')
<div class="main-content events-venue">
    <div class="container">
        <h1>Your events</h1>
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
           <p>No upcoming events yet, <a href="{{ route('venue/events/create') }}">please add an event.</a></p>
           <a href="{{ route('venue/events/create') }}" class="btn">add event</a>
        @endforelse
    </div>    
</div>
@endsection