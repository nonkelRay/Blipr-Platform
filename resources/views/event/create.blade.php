@extends('layouts.venue')

@section('content')
<div class="main-content events-venue-create">
    <div class="container">
    <h1>Create new Event</h1>

    <form method="POST" action="" enctype="multipart/form-data">
        
        @csrf

        <div>
            <label for="title">{{ __('Title') }}</label>
            <input type="text" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
        </div>

        <br>

        <div>
            <label for="artist">{{ __('Artist') }}</label>
            <input type="text" name="artist" value="{{ old('artist') }}" required autocomplete="artist" autofocus>
        </div>

        <br>

        <div>
            <label for="date">{{ __('Date') }}</label>
            <input type="date" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
        </div>

        <br>

        <div>
            <label for="image">{{ __('Hero Image') }}</label>
            <input type="file" name="image" value="{{ old('image') }}" accept="image/*" required autocomplete="image" autofocus>
        </div>

        <button type="submit" class="btn btn-primary">
            {{ __('Create') }}
         </button>
        

    </form>
</div>
@endsection