@extends('master')

@section('title', 'Workout - Admin Page')

@section('style')
    <style>
    </style>
@endsection

{{-- Header --}}
<nav class="justify-evenly fixed bg-cLightGrey w-full z-10">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-2 text-2xl">
                <li>
                    <p class="text-cBlue font-extrabold dark:text-white hover:text-cBlue">Workout</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white hover:text-cBlue">Plans</p>
                </li>
            </ul>
            <a href="#" class="fixed bg-cBlue rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a>
        </div>
    </div>
</nav>

@section('body')
    <div class="w-full h-[300px] p-10 pt-16 bg-transparent">
        <p class="text-cDarkBlue mt-2">Categories</p>
        <div class="w-80% h-[160px] flex mt-2 justify-between mb-5">
            {{-- Workout Plans --}}
            <a href="/admin/workout" class="w-[48%]">
                <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isWorkoutActive')">
                    <div class="h-[75%] w-full bg-cover" style="background-image: url('/assets/olahragaCategory.png')"></div>
                    <p class="text-center text-white mt-2">Workout</p>
                </div>
            </a>
            {{-- Meditation Plans --}}
            <a href="/admin/meditation" class="w-[48%]">
                <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isMeditationActive')">
                    <div class="h-[75%] w-full bg-cover" style="background-image: url('/assets/meditasiCategory.png')"></div>
                    <p class="text-center text-white mt-2">Meditation</p>
                </div>
            </a>
        </div>
    </div>
    @include('adminpage.adminNavbar', ['active' => 'adminpage.listWorkout'])
@endsection
