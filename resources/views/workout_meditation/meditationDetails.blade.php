@extends('master')

@section('title', 'Meditation Details')

@section('style')
    <style>
        * {
            /* border: red solid 0.5px; */
        }
    </style>
@endsection

@section('body')
    <x-back-get hover-bg="bg-cBlue" backlink="/meditations"/>

    <div class="w-full py-8">
        {{-- Container Foto --}}
        <div class="w-[90%] m-auto rounded-3xl h-[550px] bg-cover" style="background-image: url('/assets/meditationImage.png')">

        </div>
        {{-- Bottom Blue --}}
        <div class="w-full rounded-t-[50px] h-[300px] fixed bottom-0 bg-cBlue p-4 text-center text-white">
            <hr class="w-[200px] m-auto border-2">
            <h1 class="text-2xl font-bold mt-6">{{ $meditation[0]->name }}</h1>
            <p class="text-sm font-normal mt-1">{{ $meditation[0]->description }}g</p>

            {{-- Audio --}}
            <audio loop playsinline id="audio" class="rounded-2xl w-full mt-8" preload="metadata">
                {{-- <source src="{{ $meditation[0]->audio . '.mp3' }}"> --}}
                <source src="audio/abangJago.mp3">
                Your browser doesn't support audio
            </audio>

            {{-- Audio Controls --}}
            {{-- Time --}}
            <div class="mt-7 mb-3">
                <span id="progressDuration">00:00</span>
                <span>/</span>
                <span id="totalDuration"></span>
            </div>
            {{-- Sliding Bar --}}
            <input type="range" id="seek-bar" value="0" class="w-[300px] mb-4 ">

            <div class="flex w-full justify-center text-black">

                {{-- Button << --}}
                <button type="button" id="rewind" class="block">
                    <span class="material-symbols-outlined">
                        fast_rewind
                    </span>
                </button>

                {{-- Button Play --}}
                <button type="button" id="play" class="block mx-4 bg-white text-cBlue w-[70px] aspect-square rounded-full">
                    <span class="material-symbols-outlined scale-[2]">
                        play_arrow
                    </span>
                </button>

                {{-- Button Pause --}}
                <button type="button" id="pause" class="hidden block mx-4 bg-white text-cBlue w-[70px] aspect-square rounded-full">
                    <span class="material-symbols-outlined scale-[2]">
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
    </div>
@endsection

@section('scripts')
    <script>
        // Audio
        var audio = document.getElementById("audio");

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
            audio.play()

            playButton.classList.add('hidden')
            pauseButton.classList.remove('hidden')
        }

        function playToPause(){
            audio.pause()

            pauseButton.classList.add('hidden')
            playButton.classList.remove('hidden')
        }

        function fast_rewind(n){
            // Calculate the new time
            var time = audio.duration * (seekBar.value / 100) + n;

            // Update the audio time
            audio.currentTime = time;
            console.log(audio.currentTime);
        }

        function format_number(num){
            return ("0" + num).slice(-2);
        }

        audio.onloadedmetadata = function() {
            totalDuration.innerHTML = format_number(Math.floor(audio.duration/60)) + ':' + format_number(Math.floor(audio.duration % 60))
        }

        window.onload = function() {
            // Load audio Duration

            // Event listener for the play button
            playButton.addEventListener("click", pauseToPlay);

            // Event listener for the pause button
            pauseButton.addEventListener("click", playToPause);

            // Event listener for the seek bar
            seekBar.addEventListener("change", function() {
                // Calculate the new time
                var time = audio.duration * (seekBar.value / 100);

                // Update the audio time
                audio.currentTime = time;
            });

            // Update the seek bar as the audio plays
            audio.addEventListener("timeupdate", function() {
                // Calculate the slider value
                var value = (100 / audio.duration) * audio.currentTime;

                // Update the slider value
                seekBar.value = value;

                progressDuration.innerHTML = format_number(Math.floor(audio.currentTime/60)) + ':' + format_number(Math.floor(audio.currentTime%60))
            });

            // Pause the audio when the slider handle is being dragged
            seekBar.addEventListener("mousedown", function() {
                audio.pause();
            });

            // Play the audio when the slider handle is dropped
            seekBar.addEventListener("mouseup", function() {
                audio.play();
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
                    if(audio.paused){
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
