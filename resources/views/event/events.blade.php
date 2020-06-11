@extends('layouts.venue')

@section('content')
<div class="main-content events-venue">
    <div class="container">
        <h1>Your events</h1>
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        @forelse ($events as $event)
            <div class="upcoming-event">
                {{-- <h1>{{ $event->title }}</h1> --}}
                <div class="info">
                    <h3>{{ $event->artist }}</h3>
                        <br>
                    <p> {{ $event->date }}</p> 
                </div>
                  
                {{-- <img src="{{ asset('storage/' . $event->image) }}" width="60px" height="60px" alt=""> --}}
                {{-- <p> {{ $event->venue_name }}</p> --}}

                <a class="btn btn--black" href="{{$event->id}}">Go to event</a>
            </div>
        @empty
           <p>No upcoming events yet, <a href="{{ route('venue/events/create') }}">please add an event.</a></p>
           <a href="{{ route('venue/events/create') }}" class="btn btn-center">add event</a>
        @endforelse
        @if ( !($events->isEmpty()) )
            <a href="{{ route('venue/events/create') }}" class="btn btn-center">add more events</a>  
        @endif
    </div>    
</div>
@endsection