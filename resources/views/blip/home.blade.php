@extends('layouts.app')

@section('content')
<div class="your-blips">
    <div class="container">
        <h1>Your Blips</h1>
        <div class="blips-container">
            {{-- @for ($i = 0; $i < 24; $i++)
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
            @endforeach
        </div>
    </div>
</div>
@endsection