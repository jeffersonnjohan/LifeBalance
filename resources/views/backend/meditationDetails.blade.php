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
        <a href="/meditations">back</a>
    </button>

    <div>{{ $meditation[0]->image }}</div>
    <div>{{ $meditation[0]->name }}</div>
    <div>{{ $meditation[0]->description }}</div>
    <div>{{ $meditation[0]->audio }}</div>
</body>
</html>
