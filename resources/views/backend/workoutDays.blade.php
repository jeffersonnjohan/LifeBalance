<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/workoutdetails" method="POST">
        @csrf
        <input type="hidden" name='workout_id' value="{{ $workout_id }}">
        <input type="hidden" name='day' value="{{ $day }}">
        <button type="submit">back</button>
    </form>
    <div>{{ 'Day ' . $day }}</div>
    <?php $i = 1 ?>
    @foreach ($workout_activities as $activity)
    <form action="/workoutactivity" method="POST">
        @csrf
        <button>
            <input type="hidden" name="workout_activity_id" value="{{ $activity->workout_activity_id }} ">
            <input type="hidden" name='workout_id' value="{{ $workout_id }}">
            <input type="hidden" name='day' value="{{ $day }}">
            <input type="hidden" name="workout_day_id" value="{{ $workout_day_id }}">
            <div>{{ $i++ . '. ' . $activity->name }}</div>
            <div>{{ $activity->video }}</div>
            <div>{{ 'kcal burn: ' . $activity->calories }}</div>
            <div>{{ $activity->repetition . 'x'}}</div>
            <div>{{ $activity->duration . 'seconds'}}</div>
        </button>
    </form>
    @endforeach

    <form action="/workoutdetails" method="POST">
        @csrf
        <input type="hidden" name='workout_id' value="{{ $workout_id }}">
        <input type="hidden" name='day' value="{{ $day }}">
        {{-- checkbox  --}}
        {{-- @if ()

        @elseif ()

        @endif --}}
        <input type="checkbox" name="workout_check">
        <label>Have you finished today workout?</label>
    </form>
</body>
</html>
