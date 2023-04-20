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

    <?php $idx = 0 ?>
    @foreach ( $diets as $diet )
        <div>
            <button onclick="enrollPopUp({{ $idx }})">
                <div>{{ $diet->image }}</div>
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
                <button type="submit">Yes</button>
            </form>
            <button onclick="enrollPopUp({{ $idx }})">No</button>
        </div>

        <?php $idx++ ?>
    @endforeach

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
