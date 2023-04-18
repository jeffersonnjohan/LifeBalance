<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ( $diets as $diet )
        <form action="/dietdays" method="POST">
            @csrf
            <button type="submit">
                <input type="hidden" name="diet_id" value="{{ $diet->id }}">
                <div>{{ $diet->image }}</div>
                <div>{{ $diet->name }}</div>
                <div>{{ $diet->description }}</div>
                <div>{{ $diet->points }}</div>
            </button>
        </form>
    @endforeach
</body>
</html>
