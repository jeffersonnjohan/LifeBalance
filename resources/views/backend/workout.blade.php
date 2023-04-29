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

    {{-- {{ dd(array('1','2','3'), $enrollments->toArray(), array($workouts[0]->id), strval($workouts[0]->id), in_array(strval($workouts[0]->id), $enrollments->toArray()) ) }} --}}
    <?php $unenroll_plans = array() ?>
    <h3>Enrolled Plan</h3>
    @foreach ($workouts as $workout)
        @if (in_array(strval($workout->id), $enrollments->toArray()))
            <form action="/workoutdetails" method="POST">
                @csrf
                <input type="hidden" name="workout_id" value="{{ $workout->id }}">
                <button type="submit">
                    <div>
                        {{ $workout->name }}
                        <img src="{{ $workout->image . '.png' }}" alt="failed to load image">
                    </div>
                    <div> @excerpt($workout->description) </div>
                    <div>{{ $workout->points . ' points will be added!' }}</div>
                </button>
            </form>
        @else
            <?php $unenroll_plans[] = $workout ?>
        @endif
    @endforeach

    <h3>Not Enrolled Plan</h3>
    <?php $idx = 0;?>
    @if ( $unenroll_plans )
        @foreach ($unenroll_plans as $plan)
            <div>
                <button onclick="enrollPopUp({{ $idx }})">
                    <div>
                        {{ $plan->name }}
                        <img src="{{ $plan->image . '.png' }}" alt="failed to load image">
                    </div>
                    <div> @excerpt($plan->description) </div>
                    <div>{{ $plan->points . ' points will be added!' }}</div>
                </button>
            </div>
            <div class="workout_popup" style="display:none;">
                Do you want to enroll to this plan?
                <form action="/enrollworkout" method="POST">
                    @csrf
                    <input type="hidden" name="workout_id" value="{{ $plan->id }}">
                    <button type="submit">Yes</button>
                </form>
                <button onclick="enrollPopUp({{ $idx }})">No</button>
            </div>
            <?php $idx++ ?>
        @endforeach
    @endif


    <script>
        function enrollPopUp(idx) {
            var x = document.getElementsByClassName("workout_popup");
            if (x[idx].style.display === "none") {
                x[idx].style.display = "block";
            } else {
                x[idx].style.display = "none";
            }
        }
    </script>
</body>
</html>
