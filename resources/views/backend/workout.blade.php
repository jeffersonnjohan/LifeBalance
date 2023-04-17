<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div><a href="/workout">go to workout plans</a></div>
    <div><a href="/meditations">go to meditation </a></div>

    @foreach ($workouts as $workout)
    <form action="/workoutdetails" method="POST">
        @csrf
        <button type="submit">
            <input type="hidden" name="workout_id" value="{{ $workout->id }}">
            <div>
                {{ $workout->name }}
                <img src="{{ $workout->image . '.png' }}" alt="failed to load image">
            </div>
            <div> @excerpt($workout->description) </div>
            <div>{{ $workout->points . ' points will be added!' }}</div>
        </button>
    </form>

    @endforeach
</body>
</html>
