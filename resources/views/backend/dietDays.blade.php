<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <form action="/backtodiets" method="POST">
        @csrf
        <input type="hidden" id="diet_value" name="diet_value">
        <input type="hidden" name="diet_id" value="{{ $diet_id }}">
        <button type="submit" id="back">back</button>
    </form>

    <?php
        $i = 1;
        $flag = 0;
        $updated_at = \Carbon\Carbon::parse($enrollment[0]->updated_at)->format('d/M/Y');
        $today = \Carbon\Carbon::now()->format('d/M/Y');
        $tomorrow = \Carbon\Carbon::tomorrow()
    ?>
    @foreach ($diet_days as $day)
        {{-- if user already finished the plan before --}}
        @if ($enrollment[0]->finished_day >= $i)
            <div>Day {{ $i++ }}</div>
            <div>{{ $day->description }}</div>
            <input type="checkbox" checked disabled>
            <label>DONE</label>
        {{-- locked ongoing plan --}}
        @elseif ($flag == 0 and $today == $updated_at)
            <div>Day {{ $i++ }}</div>
            <div>
                Unlocked in
                <span id="countDown"></span>
            </div>
            <?php $flag = 1 ?>
        {{-- unlocked ongoing plan --}}
        @elseif ($flag == 0 and $today > $updated_at)
            <div>Day {{ $i++ }}</div>
            <div>{{ $day->description }}</div>
            <input type="checkbox" id="diet_checkbox">
            <label>DONE</label>
            <?php $flag = 1;?>
        {{-- locked plan --}}
        @else
            <div>Day {{ $i++ }}</div>
        @endif
    @endforeach

    <script>
        var checkbox = document.getElementById('diet_checkbox');
        $("#back").click(function(){
            if(checkbox.checked ){
                $("#diet_value").val(1);
            } else {
                $("#diet_value").val(0);
            }
        })

        if('<?= $today == $updated_at ?>'){
            var countDownDate = new Date("<?= $tomorrow ;?>").getTime();

            // Update the count down every 1 second
            var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for hours, minutes and seconds
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="countDown"
            document.getElementById("countDown").innerHTML = hours + "h "
            + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countDown").innerHTML = "EXPIRED";
            }
            }, 1000);
        }
    </script>
</body>
</html>

