@extends('master')

@section('title', 'Workout Days')

@section('body')
    @php
        $i = 1;
        $total_kcal = 0;
    @endphp

    <x-back-post hover-bg="bg-cBlue"/>

    <div class="w-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p class="-mr-8">BURN FAT IN 7 DAYS!</p>
        </div>
        <div class="w-full text-white">
            <div class="h-[60px] w-full bg-cBlue flex justify-center items-center">
                <h2 class="text-2xl text-center">{{ 'DAY ' . $day }}</h2>
            </div>
        </div>

        {{-- Activities Container --}}
        <div class="w-full p-4 pb-3">
            @foreach ($workout_details as $detail)
                <form action="/workoutactivity" method="POST" class="activity-form">
                    @csrf
                    <input type="hidden" name='workout_id' value="{{ $workout_id }}">
                    <input type="hidden" name='day' value="{{ $day }}">
                    <input type="hidden" name="workout_day_id" value="{{ $workout_day_id }}">
                    <input type="hidden" name="workout_activity_id" value="{{ $detail->workout_activity_id }}">
                    <div class="activity-view w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                        <div class="w-full grid grid-cols-3">
                            {{-- Section Image Kiri --}}
                            <div class="h-full p-4 text-center flex justify-center items-center">
                                {{-- Video --}}
                                <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                    <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                    Your browser doesn't support video
                                    {{-- <div>{{ $detail->workout_activity->video }}</div> --}}
                                </video>
                            </div>
                            {{-- Section Kanan Keterangan --}}
                            <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                                <h2 class="text-xl mb-3">{{ $i++ . '. ' . $detail->workout_activity->name }}</h2>
                                <p class="text-sm text-cBlue mt-2">{{ 'Kcal burn: ' . $detail->calories }}</p>
                                <p class="text-sm text-cBlue mt-2">{{ 'Repetition: ' . $detail->repetition . 'x'}}</p>
                                <p class="text-sm text-cBlue mt-2">{{ 'Durations: ' . $detail->duration . 'seconds'}}</p>
                            </div>
                        </div>
                    </div>
                    @php
                        $total_kcal += $detail->calories
                    @endphp
                </form>
                @endforeach
                <div id="done" class="flex items-center justify-end pb-24">
                    <button type="submit" class="w-40 h-fit py-2 px-5  rounded-full bg-cBlue text-white border-2 hover:bg-white hover:border-cBlue hover:text-cBlue duration-300 ease-out cursor-pointer text-center text-2xl">
                        DONE
                    </button>
                </div>
        </div>
    </div>

    {{-- done/back form --}}
    <form action="/workoutdetails" method="POST" id='form'>
        @csrf
        <input type="hidden" name='workout_id' value="{{ $workout_id }}">
        <input type="hidden" name='day' value="{{ $day }}">
        <input type="hidden" name="total_kcal" value="{{ $total_kcal }}">
        <input type="hidden" id="workout_value" name="workout_value">
    </form>
    @include('component.navbar', ['active' => 'workout'])

@endsection

@section('scripts')
    <script>
        // let checkbox = document.getElementById('workout_checkbox');
        // $("#back").click(function(){
        //     if(checkbox.checked && !checkbox.disabled){
        //         $("#workout_value").val(1);
        //     } else {
        //         $("#workout_value").val(0);
        //     }
        // })

        var form1 = document.getElementById("form");
        document.getElementById("done").addEventListener("click", function(){
            document.getElementById('workout_value').value = 1;
            console.log(document.getElementById('workout_value'))
            form1.submit();
        })
        document.getElementById("back").addEventListener("click", function(){
            form1.submit();
        })

        var form2 = document.getElementsByClassName("activity-form");
        for(let i = 0; i < form2.length; i++){
            document.getElementsByClassName("activity-view")[i].addEventListener("click", function(){
                form2[i].submit();
            })
        }
    </script>
@endsection
