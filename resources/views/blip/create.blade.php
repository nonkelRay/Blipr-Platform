<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="csrf" value="{{ csrf_token() }}">
</head>
<body>
    <h1>Create Blip</h1>

    <form method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="video">{{ __('Video') }}</label>
            <input type="file" name="video" value="{{ old('video') }}" accept="video/*" required autocomplete="video" autofocus>
        </div>

        <br>

        <div>
            <label for="description">{{ __('Description') }}</label>
            <input type="text" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>
        </div>


        <p>
        1: Happy
        <br>
        2: Emotional
        <br>
        3: Energetic
        <br>
        4: Speechless
        <br>
        5: Relaxed 
        </p>

        <div>
            <label for="feeling">{{ __('Feeling') }}</label>
            <input type="text" name="feeling" value="{{ old('feeling') }}" required autocomplete="feeling" autofocus>
        </div>
        
        <br>

        <button type="submit" class="btn btn-primary">
            {{ __('Create') }}
         </button>
        

    </form>

</body>
</html>