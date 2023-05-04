<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $temp = array(); ?>
    <div>Unfinished Plan!</div>
    @if (!$enrollments)
        @foreach ($enrollments as $enrollment)
            @if ($enrollment->is_done == 0)
                {{-- show unfinished plan--}}
                <div>
                    <div>{{ $enrollment->name }}</div>
                    <div>{{ $enrollment->day_count - $enrollment->finished_day . ' days left!'}}</div>
                </div>
            @else
                {{-- saved temporary --}}
                <?php $temp[] = $enrollment;?>
            @endif
        @endforeach

        <div>Finished Plan</div>
        @foreach ($temp as $temp)
            <div>
                <div>{{ $temp->name }}</div>
                <div>{{ \Carbon\Carbon::parse($enrollment->updated_at)->format('d M, Y') }}</div>
            </div>
        @endforeach
    @else
        <div>No History</div>
    @endif



</body>
</html>
