@extends('master')

@section('title', 'Workout Activity')

@section('body')
    <x-back-post hover-bg="bg-cBlue"/>

    <form action="/workoutdays" method="POST" id='back_form'>
        @csrf
        <input type="hidden" name='day' value="{{ $day }}">
        <input type="hidden" name='workout_id' value="{{ $workout_id }}">
        <input type="hidden" name="workout_day_id" value="{{ $workout_day_id }}">
    </form>

    <div class="w-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p class="-mr-8">BURN FAT IN 7 DAYS!</p>
        </div>
        <div class="w-full text-white">
            <div class="h-[60px] w-full bg-cBlue flex justify-center items-center">
                <h2 class="text-2xl text-center">{{ 'DAY ' . $day }}</h2>
            </div>
        </div>

        {{-- Detail Workout Activity Container --}}
        <div class="w-[90%] m-auto px-5 py-8 rounded-3xl shadow-lg my-5">
            <h2 class="text-xl">{{ $workout_activity->name }}</h2>
            <p class="mt-4 text-justify text-sm">{{ $workout_activity->description }}</p>

            {{-- Video --}}
            <video loop muted playsinline id="video" class="rounded-2xl w-full mt-8">
                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    {{-- {{ $workout_activity->video }} --}}
                Your browser doesn't support video
            </video>

            {{-- Video Controls --}}
            {{-- Time --}}
            <div class="mt-4 mb-1">
                <span id="progressDuration">00:00</span>
                <span>/</span>
                <span id="totalDuration"></span>
            </div>
            {{-- Sliding Bar --}}
            <input type="range" id="seek-bar" value="0" class="w-full mb-4">

            <div class="flex w-full justify-center">

                {{-- Button << --}}
                <button type="button" id="rewind" class="block">
                    <span class="material-symbols-outlined">
                        fast_rewind
                    </span>
                </button>

                {{-- Button Play --}}
                <button type="button" id="play" class="block mx-4 bg-black text-white w-[40px] aspect-[5/4] rounded-full">
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </button>

                {{-- Button Pause --}}
                <button type="button" id="pause" class="hidden block mx-4 bg-black text-white w-[40px] aspect-[5/4] rounded-full">
                    <span class="material-symbols-outlined">
                        pause
                    </span>
                </button>
                {{-- Button >> --}}
                <button type="button" id="forward" class="block">
                    <span class="material-symbols-outlined">
                        fast_forward
                        </span>
                </button>
            </div>

        </div>

        {{-- Space Bottom For Navbar --}}
        <div class="pb-28">

        </div>
    </div>

    @include('component.navbar', ['active' => 'workout'])

@endsection

@section('scripts')
    <script>
        var form = document.getElementById ("back_form");
            document.getElementById ("back").addEventListener("click", function () {
                form.submit();
        });

        // Video
        var video = document.getElementById("video");

        // Buttons
        var playButton = document.getElementById("play");
        var pauseButton = document.getElementById('pause');

        // Sliders
        var seekBar = document.getElementById("seek-bar");

        // Rewind & Forward
        var rewindButton = document.getElementById("rewind");
        var forwardButton = document.getElementById("forward");

        // Duration
        var progressDuration = document.getElementById("progressDuration");
        var totalDuration = document.getElementById("totalDuration");

        // Function Puase to Play
        function pauseToPlay(){
            video.play()

            playButton.classList.add('hidden')
            pauseButton.classList.remove('hidden')
        }

        function playToPause(){
            video.pause()

            pauseButton.classList.add('hidden')
            playButton.classList.remove('hidden')
        }

        function fast_rewind(n){
            // Calculate the new time
            var time = video.duration * (seekBar.value / 100) + n;

            // Update the video time
            video.currentTime = time;
        }

        function format_number(num){
            return ("0" + num).slice(-2);
        }

        window.onload = function() {
            // Load Video Duration
            totalDuration.innerHTML = format_number(Math.floor(video.duration/60)) + ':' + format_number(Math.floor(video.duration%60))

            // Event listener for the play button
            playButton.addEventListener("click", pauseToPlay);

            // Event listener for the pause button
            pauseButton.addEventListener("click", playToPause);

            // Event listener for the seek bar
            seekBar.addEventListener("change", function() {
                // Calculate the new time
                var time = video.duration * (seekBar.value / 100);

                // Update the video time
                video.currentTime = time;
            });

            // Update the seek bar as the video plays
            video.addEventListener("timeupdate", function() {
                // Calculate the slider value
                var value = (100 / video.duration) * video.currentTime;

                // Update the slider value
                seekBar.value = value;

                progressDuration.innerHTML = format_number(Math.floor(video.currentTime/60)) + ':' + format_number(Math.floor(video.currentTime%60))
            });

            // Pause the video when the slider handle is being dragged
            seekBar.addEventListener("mousedown", function() {
                video.pause();
            });

            // Play the video when the slider handle is dropped
            seekBar.addEventListener("mouseup", function() {
                video.play();
            });

            // Event listener for the forward and rewind bar
            forwardButton.addEventListener("click", function(){
                fast_rewind(5)
            });

            rewindButton.addEventListener("click", function(){
                fast_rewind(-5)
            });

            // Keyboard
            document.addEventListener('keydown', function(event) {
                if(event.key === ' ') {
                    if(video.paused){
                        pauseToPlay()
                    } else{
                        playToPause()
                    }
                }
                else if(event.keyCode == 37) {
                    fast_rewind(-5)
                }
                else if(event.keyCode == 39) {
                    fast_rewind(5)
                }
            });

        }
    </script>
@endsection
