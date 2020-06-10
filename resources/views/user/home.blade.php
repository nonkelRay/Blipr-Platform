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
            <a href="blips/{{$blip->id}}">link</a>
            <p>{{ $blip->description }}</p>
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
