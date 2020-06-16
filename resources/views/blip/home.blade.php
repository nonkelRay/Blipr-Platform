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
            @forelse($blips as $blip)
            <a href="blips/{{$blip->id}}">
                <div class="blip">   
                    <span>{{ $blip->description }}</span>
                </div>
            </a>
            @empty
                <span>Download the app and make some blips!</span>
            @endforelse
        </div>
    </div>
</div>
@endsection