@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <h1>Blips</h1>

    <div>
    @foreach ($blips as $blip)
        <div>   
            <video width="320" height="240" controls>
                <source src="{{ asset('storage/' . $blip->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p>{{ $blip->description }}</p>
            <p>{{ $blip->feeling }}</p>
            <h4>{{ $blip->heartbeat }}</h4>
        </div>
    @endforeach
    </div>

    <h1>Events</h1>

    <div>
    @foreach ($events as $event)
        <div>   
            <p>{{ $event->title }}</p>
            <p>{{ $event->artist }}</p>
            <h4>{{ $event->date }}</h4>
        </div>
    @endforeach
    </div>

</div>
@endsection
