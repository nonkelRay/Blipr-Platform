@extends('layouts.app')

@section('content')
<div class="your-blips">
    <div class="container">
        <div class="filters">
            <h1>Your Blips</h1>
            <div class="filter-container">
                <div class="button-group filter-button-group">
                    <span>Filter</span>
                    <button data-filter="*" class="all is-checked">show all</button>
                    <button data-filter=".happy" class="emo hap">happy</button>
                    <button data-filter=".emotional" class="emo">emotional</button>
                    <button data-filter=".energetic" class="emo ene">energetic</button>
                    <button data-filter=".relaxed" class="emo rel">relaxed</button>
                    {{-- <button data-filter=".speechless" class="emo spe">speechless</button> --}}
                </div>
                <div class="button-group sort-by-button-group">
                    <span >Sort</span>
                    <button data-sort-by="original-order" class="is-checked">original</button>
                    <button data-sort-by="description">description</button>
                    <button data-sort-by="artist">artist</button>
                    <button data-sort-by="venue">venue</button>
                </div>
            </div>
        </div>
        <div class="blips-container isotope-grid">
            {{-- @for ($i = 0; $i < 24; $i++) --}}
            {{-- <a href="#" class="isotope-item happy">  
                <div class="blip">
                    <span class="description">eat een blipz rzrr" rzerzer</span>
                    <span class="artist">Dua Lipa</span>
                    <span class="venue">Ancienne Belgique</span>
                </div>
            </a>
            <a href="#" class="isotope-item happy">  
                <div class="blip">
                    <span class="description">Wat een blipper</span>
                    <span class="artist">Netsky</span>
                    <span class="venue">Sportpaleis</span>
                </div>
            </a>
            <a href="#" class="isotope-item sad">  
                <div class="blip">
                    <span class="description">xat een blippo</span>
                    <span class="artist">Niels</span>
                    <span class="venue">De Roma</span>
                </div>
            </a> --}}
            {{-- @endfor --}}
            @foreach ($blips as $blip)
            <a href="blips/{{$blip->id}}" class="isotope-item {{ $blip->feeling }}">
                <div class="blip">   
                    <span class="description">{{ $blip->description }}</span>
                    <span class="artist">{{ $blip->event->artist }}</span>
                    <span class="venue">{{ $blip->event->venue_name }}</span>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection