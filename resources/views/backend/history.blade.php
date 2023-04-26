<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>Unfinished Plan!</div>
    @foreach ($enrollments as $enrollment)
        @if ($enrollment->is_done == 0)
            {{-- show unfinished plan--}}
            <div>
                <div>{{ $enrollment->name }}</div>
                <div>{{ $enrollment->day_count - $enrollment->finished_day . ' days left!'}}</div>
            </div>
        @else
            {{-- saved temporary --}}
            <?php
            $temp[] = [
                'name' => $enrollment->name,
                'finished_date' => \Carbon\Carbon::parse($enrollment->updated_at)->format('d M, Y')
            ]
            ?>
        @endif
    @endforeach

    <div>Finished Plan</div>
    @foreach ($temp as $temp)
        <div>
            <div>{{ $temp['name'] }}</div>
            <div>{{ $temp['finished_date'] }}</div>
        </div>
    @endforeach
</body>
</html>
