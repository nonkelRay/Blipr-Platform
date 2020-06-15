@extends('layouts.venue')

@section('content')
<div class="main-content events-venue-upload">
    <div class="container">
        <div class="form-container">
            <form class="form event-form" method="POST" action="" enctype="multipart/form-data">
                <h1>{{ $event->title }}</h1>
                @csrf
                <input type="file" name="video" id="video" class="inputfile" value="{{ old('video') }}" accept="video/*" required autocomplete="video" autofocus>
                <label for="video">Click to upload video (no video yet)</label>
                <button type="submit" class="btn btn-primary">
                    {{ __('Upload recording') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection