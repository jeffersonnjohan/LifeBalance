@extends('master')

@section('title', 'Workout Activity')

@section('body')
    @extends('component.backbutton')
    @section('backlink', '/workoutdays')
    
    <div class="w-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p class="-mr-8">BURN FAT IN 7 DAYS!</p>
        </div>
        <div class="w-full text-white">
            <div class="h-[60px] w-full bg-cBlue flex justify-center items-center">
                <h2 class="text-2xl text-center">DAY 1</h2>
            </div>
        </div>

        {{-- Detail Workout Activity Container --}}
        <div class="w-[90%] m-auto px-5 py-8 rounded-3xl bg-white shadow-lg my-5">
            <h2 class="text-xl">1. Push Up</h2>
            <p class="mt-4 text-justify text-sm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis, doloribus sequi! Provident neque repudiandae hic eligendi sequi earum, tenetur aliquam et similique. Accusamus delectus tempore quae incidunt quasi sequi doloremque?</p>

            {{-- Video --}}
            <video loop muted playsinline controls class="rounded-2xl w-full mt-8">
                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                Your browser doesn't support video
            </video>
        </div>
    </div>

    
    @include('component.navbar')
    
@endsection