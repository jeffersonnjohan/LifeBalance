@extends('master')

@section('title', 'Other Profile')

@section('style')
    <style>
        * {
            /* border: red solid 0.5px; */
        }
    </style>
@endsection

@section('body')
    @extends('component.backbutton')
    @section('backlink', '/profile')
    <div class="w-full h-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p>Other Profile</p>
        </div>
        <div class="w-full h-fit px-2 pb-2">
            <div class="w-full aspect-square flex gap-2 relative mb-2">
                <div class="w-[60%] h-full flex flex-col gap-2">
                    <div class="w-full h-[40%] bg-cOrange rounded-3xl"></div>
                    <div class="w-full h-[60%] bg-cRed rounded-3xl"></div>
                </div>
                <div class="w-[40%] h-full flex flex-col gap-2">
                    <div class="w-full h-[65%] bg-cGreen rounded-3xl"></div>
                    <div class="w-full h-[35%] bg-cBlue rounded-3xl"></div>
                </div>
                <div class="h-[75%] aspect-square absolute bg-cLightGrey left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] shadow-lg rounded-3xl bg-cover overflow-hidden" style="background-image: url('/assets/female.png')">
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
                <div class="w-fit flex gap-1">
                    <div class="text-2xl font-bold w-fit">Daniel Zerge Wijaya</div>
                    <div class="flex align-middle">
                        <span class="material-symbols-outlined self-center scale-[115%]" id="male">
                            male
                        </span>
                    </div>
                    <div class="flex align-middle hidden">
                        <span class="material-symbols-outlined self-center scale-[115%]" id="female">
                            female
                        </span>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-3xl mb-2">
                <div class="p-3 flex flex-col text-sm gap-1">
                    <div class="flex justify-between">
                        <div class="flex gap-3">
                            <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                                <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile2.png')"></div>
                            </div>
                            <div>
                                <p class="font-bold">Daniel Zerge Wijaya</p>
                                <p class="italic text-cDarkGrey">22 January 2023</p>
                            </div>
                        </div>
                        <div class="w-fit">
                            <p class="bg-cBlue text-white px-2 py- rounded-full font-bold">WORKOUT</p>
                        </div>
                    </div>
                    <div>
                        <p>Completed "7 Hari dengan Barbel"</p>
                    </div>
                </div>
                <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/post1.png')"></div>
            </div>
            <div class="bg-white shadow-lg rounded-3xl mb-2">
                <div class="p-3 flex flex-col text-sm gap-1">
                    <div class="flex justify-between">
                        <div class="flex gap-3">
                            <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                                <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile2.png')"></div>
                            </div>
                            <div>
                                <p class="font-bold">Daniel Zerge Wijaya</p>
                                <p class="italic text-cDarkGrey">22 January 2023</p>
                            </div>
                        </div>
                        <div class="w-fit">
                            <p class="bg-cGreen text-white px-2 py- rounded-full font-bold">DIET</p>
                        </div>
                    </div>
                    <div>
                        <p>Completed "7 Hari dengan Diet Sayur"</p>
                    </div>
                </div>
                <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/post2.png')"></div>
            </div>
        </div>
    </div>
@endsection
