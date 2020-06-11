<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>blips</h1>

    @foreach ($blips as $blip)
        <div> 
            <a href="blips/{{$blip->id}}">link</a>
            <video width="320" height="240" controls>
                <source src="{{ asset('storage/' . $blip->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <p>{{ $blip->description }}</p>
            <p>{{ $blip->feeling }}</p>
            <h4>{{ $blip->heartbeat }}</h4>
        </div>
    @endforeach
</body>
</html>