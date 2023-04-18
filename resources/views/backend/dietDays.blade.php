<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button>
        <a href="/diet">back</a>
    </button>

    <?php $i = 1 ?>
    @foreach ($diet_days as $day)
        <div>Day {{ $i++ }}</div>
        <div>{{ $day->description }}</div>
    @endforeach
</body>
</html>

