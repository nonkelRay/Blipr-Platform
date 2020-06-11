@extends('layouts.venue')

@section('content')
<div class="main-content events-venue-create">
    <div class="container">
    <h1>Add event</h1>

    <form class="form event-form" method="POST" action="" enctype="multipart/form-data">
        
        @csrf
        <input  class="field" type="text" name="title" placeholder="Event name" value="{{ old('title') }}" required autocomplete="title" autofocus>
        <input class="field" type="text" name="artist" placeholder="Artist name" value="{{ old('artist') }}" required autocomplete="artist" autofocus>
        <input class="field" type="date" name="date" value="{{ old('date') }}" required autocomplete="date" autofocus>
        {{-- <label for="image">{{ __('Click to upload photo') }}
            <input type="file" name="image" value="{{ old('image') }}" accept="image/*" required autocomplete="image" autofocus>
        </label> --}}
        {{-- <label class="inputlabel" for="image">Click to upload photo
        <input type="file" name="image" class="inputfile" value="{{ old('image') }}" accept="image/*" required autocomplete="image" autofocus>
        </label> --}}
        <input type="file" name="image" id="image" class="inputfile" value="{{ old('image') }}" accept="image/*" required autocomplete="image" autofocus>
        <label for="image">Click to upload photo</label>
        <button type="submit" class="btn btn-primary">
            {{ __('Create') }}
         </button>
        

    </form>
</div>
@endsection