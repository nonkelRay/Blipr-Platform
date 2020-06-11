@extends('layouts.venue')

@section('content')
<div class="main-content events-venue-create">
    <div class="filler"></div>
    <div class="container">
        <div class="form-container">
            <form class="form event-form" method="POST" action="" enctype="multipart/form-data">
                <h1>Add event</h1>
                @csrf
                <input  class="field" type="text" name="title" placeholder="Event name" value="{{ old('title') }}" required autocomplete="title" autofocus>
                <input class="field" type="text" name="artist" placeholder="Artist name" value="{{ old('artist') }}" required autocomplete="artist" autofocus>
                <input class="field" type="date" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
                <input type="file" name="image" id="image" class="inputfile" value="{{ old('image') }}" accept="image/*" required autocomplete="image" autofocus>
                <label for="image">Click to upload photo</label>
                <br>
                <button type="submit" class="btn btn-primary">
                    {{ __('Create') }}
                </button>
            </form>
        </div>
        <div class="img-container">
            <img src="{{ asset('images/mic.png') }}" alt="">
        </div>
    </div>
</div>
@endsection