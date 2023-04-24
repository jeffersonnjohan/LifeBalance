<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <form action="/workoutdetails" method="POST">
        @csrf
        <input type="hidden" name='workout_id' value="{{ $workout_id }}">
        <input type="hidden" name='day' value="{{ $day }}">
        <input type="hidden" id="workout_value" name="workout_value">
        <button type="submit" id="back">back</button>
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

    {{-- get preivious value: if the checkbox value is unchange, no need to update database --}}
    {{-- <input type="text" id="previous_value" value="{{}}"> --}}

    {{-- if the checkbox value is 1, then set checkbox value to checked. --}}
    <input type="checkbox" id="workout_checkbox">
    <label>DONE</label>

    <script>
        let checkbox = document.getElementById('workout_checkbox');
        $("#back").click(function(){
            if(checkbox.checked ){
                $("#workout_value").val(1);
            } else {
                $("#workout_value").val(0);
            }
        })
    </script>
</body>
</html>
