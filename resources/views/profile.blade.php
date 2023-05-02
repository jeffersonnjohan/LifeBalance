@extends('profiletemplate')

@section('bar', 'Profile')

@section('backlink', '/home')

@section('toptitle', 'Profile')

@section('email')
    <div class="text-sm w-fit">danielzerge.wijaya@gmail.com</div>
@endsection

@section('userdata')
    @include('component.editprof_logout')
    <div class="h-[100px] flex gap-2 mb-2">
        <div class="bg-white w-[50%] h-full shadow-lg rounded-3xl flex justify-center items-center text-cBlue gap-3">
            <span class="material-symbols-outlined scale-150">
                weight
            </span>
            <div class="flex items-end">
                <p class="text-5xl font-bold">60</p>
                <p class="font-bold">kg</p>
            </div>
        </div>
        <div class="bg-white w-[50%] h-full shadow-lg rounded-3xl flex justify-center items-center text-cGreen gap-3">
            <span class="material-symbols-outlined scale-150">
                height
            </span>
            <div class="flex items-end">
                <p class="text-5xl font-bold">168</p>
                <p class="font-bold">cm</p>
            </div>
        </div>
    </div>
    <div class="bg-white flex items-center px-5 h-[70px] w-full rounded-3xl text-cDarkGrey gap-4 shadow-lg text-sm mb-2">
        <span class="material-symbols-outlined">
            calendar_month
        </span>
        <p>June 9th, 2002</p>
    </div>
    <div class="bg-white flex items-center px-5 h-[70px] w-full rounded-3xl text-cDarkGrey gap-4 shadow-lg text-sm mb-2">
        <span class="material-symbols-outlined">
            location_on
        </span>
        <p>Jalan bla bla bla</p>
    </div>
@endsection
