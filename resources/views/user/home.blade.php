@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center">
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
    </div> --}}
    <section class="welcome">
        @php
            date_default_timezone_set('Europe/Brussels');
            $time = date("H");
            $hello = '';
            if ($time < "12") {
                $hello = "Good morning";
            }
            if ($time >= "12" && $time < "17") {
                $hello =  "Good afternoon";
            }
            if ($time >= "17" && $time < "23") {
                $hello = "Good evening";
            }
            if ($time >= "23") {
                $hello = "Good night";
            }
        @endphp
        <h1>{{ $hello }}, {{ Auth::user()->name }}</h1>
        <div class="welcome-container">
            <div class="info">
                <p>You have made <span>36</span> blips at <span>6</span> concerts</p>
                <p>Your highest heartbeat at a concert was <span>146</span> BPM</p>
                <p>You experienced <span>14</span> of your blips as <span>happy</span></p>
            </div>
            <div class="img-container">
                <img src="{{ @asset('images/party.png') }}" alt="">
            </div>
        </div>
        
    </section>
   <section class="events">
        <h1>Upcoming shows</h1>
        <div class="events-container">
            {{-- @for ($i = 0; $i < 5; $i++)
                <div class="event">   
                    <span>Zwangere Guy</span>
                </div>
            @endfor --}}
            @foreach ($events as $event)
                <div class="event" style="background-image: url('{{ asset('storage/' . $event->image) }}')">   
                    <span>{{ $event->artist }}</span>
                </div>
                @if ($loop->iteration == 5)
                    @break
                @endif
            @endforeach
        </div>
   </section>
   <section class="blips">
        <h1>Blips</h1>
        <div class="blips-container">
            {{-- @for ($i = 0; $i < 8; $i++)
            <div class="blip">
                <span>Wat een blip</span>
            </div>
            @endfor --}}
            @foreach ($blips as $blip)
            <a href="blips/{{$blip->id}}">
                <div class="blip">   
                    <span>{{ $blip->description }}</span>
                </div>
            </a>
            @if ($loop->iteration == 10)
                @break
            @endif
            @endforeach
        </div>
        <a href="{{ route('user/blips') }}" class="btn">All blips</a>
   </section>
    

    <div>
    @foreach ($blips as $blip)
        <div>   
            <a href="blips/{{$blip->id}}">link</a>
            <p>{{ $blip->description }}</p>
        </div>
        @if ($loop->iteration == 10)
            @break
        @endif
    @endforeach
    </div>
</div>
@endsection
