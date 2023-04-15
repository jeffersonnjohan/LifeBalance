@extends('master')

@section('title', 'Workout Detail')

@section('body')
    @extends('component.backbutton')
    @section('backlink', '/workoutmeditations')
    
    <div class="">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p class="-mr-8">BURN FAT IN 7 DAYS!</p>
        </div>
        <div class="w-full bg-cBlue h-[270px] py-6 px-10 text-white">
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

        @include('component.navbar')
    </div>
    
@endsection