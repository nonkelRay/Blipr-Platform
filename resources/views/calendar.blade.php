<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Blipr Calendar</p>

    <form method="POST" action="{{URL::to('/calendar')}}" role="search" class="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" id="search_field" name="search" placeholder="Search for Artists">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-search">Search Artists</button>
            </span>
        </div>
    </form>

    @foreach ($events as $event)
        <div>
            <h1>{{ $event->title }}</h1>
            <h4>{{ $event->artist }}</h2>   
            <img src="{{ asset('storage/' . $event->image) }}" width="60px" height="60px" alt="">
            <p>{{ $event->date }}</p>
        </div>
    @endforeach
</body>
</html>