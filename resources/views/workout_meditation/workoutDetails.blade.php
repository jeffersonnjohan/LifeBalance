@extends('master')

@section('title', 'Workout Detail')

@section('style')
    {{-- <style>
        * {
            border: solid red;
        }
    </style> --}}
@endsection

@section('body')
    <x-back-get hover-bg="bg-cBlue" backlink="/workouts"/>

    <div class="h-full w-full">
        <div class="lg:fixed lg:right-0 lg:left-0 lg:top-0 lg:w-full lg:h-[70px] lg:bg-cLightGrey lg:z-10">
            <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
                <p class="-mr-8"> {{ $workout[0]->name }} </p>
            </div>
        </div>
        <div class="w-full text-white lg:mt-[60px] lg:flex">
            <div class="h-[270px] bg-cBlue py-6 px-10 w-full lg:fixed lg:py-14 lg:h-[100vw] lg:w-[25%]">
                <h2 class="text-2xl"> {{ $workout[0]->name }} </h2>
                <p class="text-sm"> {{ $workout[0]->description }}</p>
                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-2">
                        toll
                    </span>
                    {{ $workout[0]->points . ' points ' }}
                </p>

                {{-- Indicator Container --}}
                <div class="w-full h-[80px] flex justify-between mt-4 text-black lg:flex-col lg:items-center lg:gap-y-2">
                    <div class="w-[100px] h-full bg-white text-center py-2 rounded-md">
                        <p>Total Time</p>
                        <p class="font-bold text-2xl text-cBlue">{{ $workout_days->count() }}</p>
                    </div>
                    <div class="w-[100px] h-full bg-white text-center py-2 rounded-md">
                        <p>Kcal Burn</p>
                        <p class="font-bold text-2xl text-cBlue">550</p>
                    </div>
                    <div class="w-[100px] h-full bg-white text-center py-2 rounded-md">
                        <p>Total Pose</p>
                        <p class="font-bold text-2xl text-cBlue">11</p>
                    </div>
                </div>
            </div>

            {{-- Day container --}}
            <div class="w-full grid grid-cols-2 gap-5 font-bold text-4xl pt-6 pb-32 px-10 lg:ml-[25%] lg:grid lg:grid-cols-2 lg:overflow-scroll">
                <?php
                    $i = 1;
                    $flag = 0;
                    $updated_at = \Carbon\Carbon::parse($enrollment[0]->updated_at)->format('d/M/Y');
                    $today = \Carbon\Carbon::now('GMT+7')->format('d/M/Y');
                    $tomorrow = \Carbon\Carbon::tomorrow('GMT+7');
                ?>
                @foreach ($workout_days as $day)
                    {{-- if user already finished the plan before--}}
                    @if ($enrollment[0]->finished_day >= $i )
                        <form action="/workoutdays" method="POST" class="form">
                            @csrf
                            <input type="hidden" name='workout_id' value="{{ $workout[0]->id }}">
                            <input type="hidden" name='workout_day_id' value="{{ $day->id }}">
                            <input type="hidden" name='day' value="{{ $i }}">
                            <div class="open-day aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cBlue border-cBlue">
                                {{ 'DAY ' . $i++ }}
                            </div>
                        </form>
                    {{-- unlocked ongoing plan or if it's user first day--}}
                    @elseif ($flag == 0 and $enrollment[0]->finished_day == 0 )
                        <form action="/workoutdays" method="POST" class="form">
                            @csrf
                            <input type="hidden" name='workout_id' value="{{ $workout[0]->id }}">
                            <input type="hidden" name='workout_day_id' value="{{ $day->id }}">
                            <input type="hidden" name='day' value="{{ $i }}">
                            <div class="open-day aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cBlue border-cBlue">
                                {{ 'DAY ' . $i++ }}
                            </div>
                        </form>
                        <?php $flag = 1;?>
                    {{-- locked ongoing plan --}}
                    @elseif ($flag == 0 and $today == $updated_at)
                        <div class="open-day flex flex-col text-center aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cDarkGrey border-cDarkGrey ">
                            <div>
                                {{ 'Day ' . $i++ }}
                            </div>
                            <div class="text-xl">
                                Unlocked in
                                <div id="countDown"></div>
                            </div>
                        </div>
                        <?php $flag = 1 ?>
                    @elseif (!$flag)
                        <form action="/workoutdays" method="POST" class="form">
                            @csrf
                            <input type="hidden" name='workout_id' value="{{ $workout[0]->id }}">
                            <input type="hidden" name='workout_day_id' value="{{ $day->id }}">
                            <input type="hidden" name='day' value="{{ $i }}">
                            <div class="open-day aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cBlue border-cBlue">
                                {{ 'DAY ' . $i++ }}
                            </div>
                        </form>
                        <?php $flag = 1 ?>
                    @else
                        <div class="flex flex-col text-center aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cDarkGrey border-cDarkGrey relative">
                            {{ 'DAY ' . $i++ . ' Locked'}}
                            {{-- Overlay Gembok --}}
                            <div class="absolute top-0 bottom-0 left-0 right-0 bg-[rgba(255,255,255,0.75)] rounded-3xl flex justify-center items-center">
                                <span class="material-symbols-outlined scale-[2] text-black opacity-100">
                                    lock
                                </span>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

    </div>
    <x-navbar active="workout" admin="false"/>
    @include('backend.countdown-js')
    <script>
        var form = document.getElementsByClassName ("form");
        for(let i = 0; i < form.length; i++){
            document.getElementsByClassName("open-day")[i].addEventListener("click", function () {
                form[i].submit();
            });
        }
    </script>
@endsection
