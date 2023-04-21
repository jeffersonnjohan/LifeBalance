<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div><a href="/workouts">go to workout plans</a></div>
    <div><a href="/meditations">go to meditation </a></div>

    <form action="/meditations">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Find music..." name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
        </div>
    </form>

    @foreach ($meditations as $meditation)
        <form action="/meditationDetails" method="POST">
            @csrf
            <button type="submit">
                <input type="hidden" name="meditation_id" value="{{ $meditation->id }}">
                {{ $meditation->name }}
            </button>
        </form>
    @endforeach
</body>
</html>
