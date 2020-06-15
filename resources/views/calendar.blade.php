@extends('layouts.app')

@section('content')
<div class="calendar main-content">
<div class="container">
<div class="header-shows">
    <h1>Upcoming shows</h1>
    <form method="POST" action="{{URL::to('/calendar')}}" role="search" class="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" id="search_field" name="search" placeholder="Search for Artists">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-search">Search</button>
            </span>
        </div>
    </form>
</div>
    <div class="event-container">
    @foreach ($events as $event)
    <a href="{{$event->link_socials}}" >
        <div class="event" style="background-image: url('{{ asset('storage/' . $event->image) }}')">   
            <span>{{ $event->artist }} <br> {{ $event->date }}</span>
        </div>
    </a>
    @endforeach
    </div>
    {{-- @foreach ($events as $event)
        <div>
            <h1>{{ $event->title }}</h1>
            <h4>{{ $event->artist }}</h2>   
            <img src="{{ asset('storage/' . $event->image) }}" width="60px" height="60px" alt="">
            <p>{{ $event->date }}</p>
        </div>
    @endforeach --}}
</div>   
</div> 
@endsection