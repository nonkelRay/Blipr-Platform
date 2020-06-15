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

        <br>

        <!-- <div>
            <label for="feeling">{{ __('Feeling') }}</label>
            <select name="feeling" form="feelingform" value="{{ old('feeling') }}" required autofocus>
                <option value="Happy">Happy</option>
                <option value="Emotional">Emotional</option>
                <option value="Energetic">Energetic</option>
                <option value="Speechless">Speechless</option>
                <option value="Relaxed">Relaxed</option>
            </select>
        </div> -->
        
        <br>

        <button type="submit" class="btn btn-primary">
            {{ __('Create') }}
         </button>
        

    </form>

</body>
</html>