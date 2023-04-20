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

    <?php $idx = 0 ?>
    @foreach ($workouts as $workout)
        <div>
            <button onclick="enrollPopUp({{ $idx }})">
                <div>
                    {{ $workout->name }}
                    <img src="{{ $workout->image . '.png' }}" alt="failed to load image">
                </div>
                <div> @excerpt($workout->description) </div>
                <div>{{ $workout->points . ' points will be added!' }}</div>
            </button>
        </div>

        <div class="workout_popup" style="display:none;">
            Do you want to enroll to this plan?
            <form action="/workoutdetails" method="POST">
                @csrf
                <input type="hidden" name="workout_id" value="{{ $workout->id }}">
                <button type="submit">Yes</button>
            </form>
            <button onclick="enrollPopUp({{ $idx }})">No</button>
        </div>

        <?php $idx++ ?>
    @endforeach

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
