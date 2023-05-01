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
    <?php
        $i = 1;
        $flag = 0;
        $updated_at = \Carbon\Carbon::parse($enrollment[0]->updated_at)->format('d/M/Y');
        $today = \Carbon\Carbon::now()->format('d/M/Y');
        $tomorrow = \Carbon\Carbon::tomorrow();
    ?>
    @foreach ($workout_days as $day)
        {{-- if user already finished the plan before--}}
        @if ($enrollment[0]->finished_day >= $i )
            <form action="/workoutdays" method="POST">
                @csrf
                <input type="hidden" name='workout_id' value="{{ $workout[0]->id }}">
                <input type="hidden" name='workout_day_id' value="{{ $day->id }}">
                <input type="hidden" name='day' value="{{ $i }}">
                <button type="submit">
                    {{ 'Day ' . $i++ }}
                </button>
            </form>
        {{-- unlocked ongoing plan or if it's user first day--}}
        @elseif ($flag == 0 and $enrollment[0]->finished_day == 0 )
            <form action="/workoutdays" method="POST">
                @csrf
                <input type="hidden" name='workout_id' value="{{ $workout[0]->id }}">
                <input type="hidden" name='workout_day_id' value="{{ $day->id }}">
                <input type="hidden" name='day' value="{{ $i }}">
                <button type="submit">
                    {{ 'Day ' . $i++ }}
                </button>
            </form>
            <?php $flag = 1;?>
        {{-- locked ongoing plan --}}
        @elseif ($flag == 0 and $today == $updated_at)
            <div>Day {{ $i++ }}</div>
            <div>
                Unlocked in
                <span id="countDown"></span>
            </div>
            <?php $flag = 1 ?>
        @elseif (!$flag)
            <form action="/workoutdays" method="POST">
                @csrf
                <input type="hidden" name='workout_id' value="{{ $workout[0]->id }}">
                <input type="hidden" name='workout_day_id' value="{{ $day->id }}">
                <input type="hidden" name='day' value="{{ $i }}">
                <button type="submit">
                    {{ 'Day ' . $i++ }}
                </button>
            </form>
            <?php $flag = 1 ?>
        @else
            <div>{{ 'Day ' . $i++ . ' locked'}}</div>
        @endif
    @endforeach

    @include('backend.countdown-js')
</body>
</html>
