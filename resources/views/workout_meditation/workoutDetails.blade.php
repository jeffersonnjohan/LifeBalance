@extends('master')

@section('title', 'Workout Detail')

@section('body')
    @extends('component.backbutton')
    @section('backlink', '/workoutmeditations')
    
    <div>
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p class="-mr-8">BURN FAT IN 7 DAYS!</p>
        </div>
        <div class="w-full text-white">
            <div class="h-[270px] bg-cBlue py-6 px-10 ">
                <h2 class="text-2xl">BURN FAT IN 7 DAYS!</h2>
                <p class="text-sm">Workout Program (Results in 1 Week) include ...sadn sadjashdiushdiusahdusdsfsdfdsfdsfdsf</p>
                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-2">
                        toll
                    </span>
                    35 points
                </p>
                
                {{-- Indicator Container --}}
                <div class="w-full h-[80px] flex justify-between mt-4 text-black">
                    <div class="w-[90px] h-full bg-white text-center py-2">
                        <p>Total Time</p>
                        <p class="font-bold text-2xl text-cBlue">7</p>
                    </div>
                    <div class="w-[90px] h-full bg-white text-center py-2">
                        <p>Kcal Burn</p>
                        <p class="font-bold text-2xl text-cBlue">550</p>
                    </div>
                    <div class="w-[90px] h-full bg-white text-center py-2">
                        <p>Total Pose</p>
                        <p class="font-bold text-2xl text-cBlue">11</p>
                    </div>
                </div>
            </div>

            {{-- Day container --}}
            <div class="w-full grid grid-cols-2 gap-5 font-bold text-4xl pt-6 pb-32 px-10">
                {{-- Day Card --}}
                <a href="/workoutdays">
                    <div class="aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cBlue border-cBlue">
                        DAY 1
                    </div>
                </a>
                <a href="/workoutdays">
                    <div class="aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cBlue border-cBlue">
                        DAY 2
                    </div>
                </a>
                {{-- Day Card Locked--}}
                <a href="/workoutdays">
                    <div class="aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cDarkGrey border-cDarkGrey relative">
                        DAY 3
                        {{-- Overlay Gembok --}}
                        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[rgba(255,255,255,0.75)] rounded-3xl flex justify-center items-center">
                            <span class="material-symbols-outlined scale-[2] text-black opacity-100">
                                lock
                            </span>
                        </div>
                    </div>
                </a>
                {{-- Day Card Locked--}}
                <a href="/workoutdays">
                    <div class="aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cDarkGrey border-cDarkGrey relative">
                        DAY 4
                        {{-- Overlay Gembok --}}
                        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[rgba(255,255,255,0.75)] rounded-3xl flex justify-center items-center">
                            <span class="material-symbols-outlined scale-[2] text-black opacity-100">
                                lock
                            </span>
                        </div>
                    </div>
                </a>
                {{-- Day Card Locked--}}
                <a href="/workoutdays">
                    <div class="aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cDarkGrey border-cDarkGrey relative">
                        DAY 5
                        {{-- Overlay Gembok --}}
                        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[rgba(255,255,255,0.75)] rounded-3xl flex justify-center items-center">
                            <span class="material-symbols-outlined scale-[2] text-black opacity-100">
                                lock
                            </span>
                        </div>
                    </div>
                </a>
                {{-- Day Card Locked--}}
                <a href="/workoutdays">
                    <div class="aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cDarkGrey border-cDarkGrey relative">
                        DAY 6
                        {{-- Overlay Gembok --}}
                        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[rgba(255,255,255,0.75)] rounded-3xl flex justify-center items-center">
                            <span class="material-symbols-outlined scale-[2] text-black opacity-100">
                                lock
                            </span>
                        </div>
                    </div>
                </a>
                {{-- Day Card Locked--}}
                <a href="/workoutdays">
                    <div class="aspect-square bg-white rounded-3xl flex justify-center items-center border-2 text-cDarkGrey border-cDarkGrey relative">
                        DAY 7
                        {{-- Overlay Gembok --}}
                        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[rgba(255,255,255,0.75)] rounded-3xl flex justify-center items-center">
                            <span class="material-symbols-outlined scale-[2] text-black opacity-100">
                                lock
                            </span>
                        </div>
                    </div>
                </a>
    
            </div>
        </div>

    </div>

    @include('component.navbar')
    
@endsection