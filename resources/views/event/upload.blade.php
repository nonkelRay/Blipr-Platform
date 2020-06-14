@extends('layouts.venue')

@section('content')
<div class="main-content events-venue-create">
    <div class="filler"></div>
    <div class="container">
        <div class="form-container">
            <form class="form event-form" method="POST" action="" enctype="multipart/form-data">
                <h1>{{ $event->title }}</h1>
                @csrf
                <input type="file" name="video" value="{{ old('video') }}" accept="video/*" required autocomplete="video" autofocus>
                <br>
                <button type="submit" class="btn btn-primary">
                    {{ __('Upload recording') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection