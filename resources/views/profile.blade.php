@extends('master')

@section('title', 'Profile')

@section('style')
    <style>
        * {
            /* border: red solid 0.5px; */
        }
    </style>
@endsection

@section('body')
    <div class="w-full h-full p-2">
        <div class="w-full aspect-square flex gap-2 relative mb-2">
            <div class="w-[60%] h-full flex flex-col gap-2">
                <div class="w-full h-[40%] bg-cOrange rounded-3xl"></div>
                <div class="w-full h-[60%] bg-cRed rounded-3xl"></div>
            </div>
            <div class="w-[40%] h-full flex flex-col gap-2">
                <div class="w-full h-[65%] bg-cGreen rounded-3xl"></div>
                <div class="w-full h-[35%] bg-cBlue rounded-3xl"></div>
            </div>
            <div class="h-[75%] aspect-square absolute bg-cLightGrey left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] shadow-lg rounded-3xl bg-cover overflow-hidden" style="background-image: url('/assets/male.png')">
                <div class="bg-white h-fit w-fit absolute right-0 px-3 py-1 flex items-center gap-1 font-bold rounded-bl-3xl">
                    <span class="material-symbols-outlined text-cYellow">
                        toll
                    </span>
                    <div class="flex justify-center">
                        <p class="h-fit">300</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center mb-2">
            <div class="text-2xl font-bold w-fit">Daniel Zerge Wijaya</div>
            <div class="text-sm w-fit">danielzerge.wijaya@gmail.com</div>
        </div>
        <div class="h-[100px] flex gap-2">
            <div class="bg-white w-[50%] h-full shadow-lg rounded-3xl">
                <span class="material-symbols-outlined border border-red-500 text-3xl h-10 w-10">
                    weight
                </span>
            </div>
            <div class="bg-white w-[50%] h-full shadow-lg rounded-3xl">
                <span class="material-symbols-outlined">
                    height
                </span>
            </div>
        </div>
    </div>
@endsection
