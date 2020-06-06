<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Events</p>
    @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif

    @foreach ($events as $event)
        <div>
            <h1>{{ $event->title }}</h1>
            <h4>{{ $event->artist }}</h2>   
            <img src="{{ asset('storage/' . $event->image) }}" width="60px" height="60px" alt="">
            <p> {{ $event->venue_name }}</p>
        </div>
    @endforeach
</body>
</html>