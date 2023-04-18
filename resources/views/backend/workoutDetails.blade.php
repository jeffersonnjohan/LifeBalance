<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div><a href="/workouts">back</a></div>
    <div style="border: 1px solid black">
        <div> {{ $workout[0]->name }} </div>
        <div> {{ $workout[0]->description }} </div>
        <div>{{ $workout[0]->points . ' points ' }}</div>
    </div>


    <div>Total Time: {{ $workout_days->count() }}</div>
    <?php $i = 1 ?>
    @foreach ($workout_days as $day)
    <form action="/workoutdays" method="POST">
        @csrf
        <input type="hidden" name='workout_id' value="{{ $workout[0]->id }}">
        <input type="hidden" name='workout_day_id' value="{{ $day->id }}">
        <input type="hidden" name='day' value="{{ $i }}">
        <button type="submit">
            Day {{ ' ' . $i++ }}
        </button>
    </form>
    @endforeach
</body>
</html>
