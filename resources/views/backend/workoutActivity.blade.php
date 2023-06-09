<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/workoutdays" method="POST">
        @csrf
        <input type="hidden" name='day' value="{{ $day }}">
        <input type="hidden" name='workout_id' value="{{ $workout_id }}">
        <input type="hidden" name="workout_day_id" value="{{ $workout_day_id }}">
        <button type="submit">back</button>
    </form>

    <div>{{ 'Day ' . $day }}</div>
        <div>{{ $workout_activity->name }}</div>
        <div>{{ $workout_activity->description }}</div>
        <div>{{ $workout_activity->video }}</div>
</body>
</html>
