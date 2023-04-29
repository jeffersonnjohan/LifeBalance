<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/diets">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search for new plan?" name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit">Search</button>
        </div>
    </form>

    <?php $unenroll_plans = array() ?>
    <h3>Enrolled Plan</h3>
    @foreach ( $diets as $diet )
        @if (in_array(strval($diet->id), $enrollments->toArray()))
            <div>
                <form action="/dietdays" method="POST">
                    @csrf
                    <input type="hidden" name="diet_id" value="{{ $diet->id }}">
                    <button type="submit">
                        <div><img src="{{ $diet->image . '.png' }}" alt="failed to load image"></div>
                        <div>{{ $diet->name }}</div>
                        <div>{{ $diet->description }}</div>
                        <div>{{ $diet->points }}</div>
                    </button>
                </form>
            </div>
        @else
            <?php $unenroll_plans[] = $diet ?>
        @endif
    @endforeach

    <h3>Not Enrolled Plan</h3>
    <?php $idx = 0;?>
    @if ( $unenroll_plans )
        @foreach ($unenroll_plans as $plan)
            <div>
                <button onclick="enrollPopUp({{ $idx }})">
                    <div><img src="{{ $diet->image . '.png' }}" alt="failed to load image"></div>
                    <div>{{ $diet->name }}</div>
                    <div>{{ $diet->description }}</div>
                    <div>{{ $diet->points }}</div>
                </button>
            </div>

            <div class="diet_popup" style="display:none;">
                Do you want to enroll to this plan?
                <form action="/dietdays" method="POST">
                    @csrf
                    <input type="hidden" name="diet_id" value="{{ $diet->id }}">
                    <input type="hidden" name="is_new" value="1">
                    <button type="submit">Yes</button>
                </form>
                <button onclick="enrollPopUp({{ $idx }})">No</button>
            </div>

            <?php $idx++ ?>
        @endforeach
    @endif

    <script>
        function enrollPopUp(idx) {
            var x = document.getElementsByClassName("diet_popup");
            if (x[idx].style.display === "none") {
                x[idx].style.display = "block";
            } else {
                x[idx].style.display = "none";
            }
        }
    </script>
</body>
</html>
