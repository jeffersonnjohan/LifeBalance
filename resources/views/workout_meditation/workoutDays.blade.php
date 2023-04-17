@extends('master')

@section('title', 'Workout Days')

@section('body')
    @extends('component.backbutton')
    @section('backlink', '/workoutdetails')
    
    <div class="w-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p class="-mr-8">BURN FAT IN 7 DAYS!</p>
        </div>
        <div class="w-full text-white">
            <div class="h-[60px] w-full bg-cBlue flex justify-center items-center">
                <h2 class="text-2xl text-center">DAY 1</h2>
            </div>
        </div>

        {{-- Activities Container --}}
        <div class="w-full p-4 pb-3 ">
            
            {{-- Activity Card --}}
            <a href="/workoutactivity">
                <div class="w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                    {{-- <div class="w-full text-center h-1/4 p-2 text-xl">
                        1. Push Up
                    </div> --}}
                    <div class="w-full grid grid-cols-3">
                        {{-- Section Image Kiri --}}
                        <div class="h-full p-4 text-center flex justify-center items-center">
                            {{-- Video --}}
                            <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser doesn't support video
                            </video>
                        </div>

                        {{-- Section Kanan Keterangan --}}
                        <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">1. Push Up</h2>
                            <p class="text-sm text-cBlue mt-2">Kcal Burn: 20</p>
                            <p class="text-sm text-cBlue mt-2">Repetisi: 5x</p>
                            <p class="text-sm text-cBlue mt-2">Durasi: 360 detik</p>
                        </div>

                    </div>
                </div>
            </a>
            {{-- Activity Card --}}
            <a href="/workoutactivity">
                <div class="w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                    {{-- <div class="w-full text-center h-1/4 p-2 text-xl">
                        1. Push Up
                    </div> --}}
                    <div class="w-full grid grid-cols-3">
                        {{-- Section Image Kiri --}}
                        <div class="h-full p-4 text-center flex justify-center items-center">
                            {{-- Video --}}
                            <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser doesn't support video
                            </video>
                        </div>

                        {{-- Section Kanan Keterangan --}}
                        <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">1. Push Up</h2>
                            <p class="text-sm text-cBlue mt-2">Kcal Burn: 20</p>
                            <p class="text-sm text-cBlue mt-2">Repetisi: 5x</p>
                            <p class="text-sm text-cBlue mt-2">Durasi: 360 detik</p>
                        </div>

                    </div>
                </div>
            </a>
            {{-- Activity Card --}}
            <a href="/workoutactivity">
                <div class="w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                    {{-- <div class="w-full text-center h-1/4 p-2 text-xl">
                        1. Push Up
                    </div> --}}
                    <div class="w-full grid grid-cols-3">
                        {{-- Section Image Kiri --}}
                        <div class="h-full p-4 text-center flex justify-center items-center">
                            {{-- Video --}}
                            <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser doesn't support video
                            </video>
                        </div>

                        {{-- Section Kanan Keterangan --}}
                        <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">1. Push Up</h2>
                            <p class="text-sm text-cBlue mt-2">Kcal Burn: 20</p>
                            <p class="text-sm text-cBlue mt-2">Repetisi: 5x</p>
                            <p class="text-sm text-cBlue mt-2">Durasi: 360 detik</p>
                        </div>

                    </div>
                </div>
            </a>
            {{-- Activity Card --}}
            <a href="/workoutactivity">
                <div class="w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                    {{-- <div class="w-full text-center h-1/4 p-2 text-xl">
                        1. Push Up
                    </div> --}}
                    <div class="w-full grid grid-cols-3">
                        {{-- Section Image Kiri --}}
                        <div class="h-full p-4 text-center flex justify-center items-center">
                            {{-- Video --}}
                            <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser doesn't support video
                            </video>
                        </div>

                        {{-- Section Kanan Keterangan --}}
                        <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">1. Push Up</h2>
                            <p class="text-sm text-cBlue mt-2">Kcal Burn: 20</p>
                            <p class="text-sm text-cBlue mt-2">Repetisi: 5x</p>
                            <p class="text-sm text-cBlue mt-2">Durasi: 360 detik</p>
                        </div>

                    </div>
                </div>
            </a>
            {{-- Activity Card --}}
            <a href="/workoutactivity">
                <div class="w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                    {{-- <div class="w-full text-center h-1/4 p-2 text-xl">
                        1. Push Up
                    </div> --}}
                    <div class="w-full grid grid-cols-3">
                        {{-- Section Image Kiri --}}
                        <div class="h-full p-4 text-center flex justify-center items-center">
                            {{-- Video --}}
                            <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser doesn't support video
                            </video>
                        </div>

                        {{-- Section Kanan Keterangan --}}
                        <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">1. Push Up</h2>
                            <p class="text-sm text-cBlue mt-2">Kcal Burn: 20</p>
                            <p class="text-sm text-cBlue mt-2">Repetisi: 5x</p>
                            <p class="text-sm text-cBlue mt-2">Durasi: 360 detik</p>
                        </div>

                    </div>
                </div>
            </a>
            {{-- Activity Card --}}
            <a href="/workoutactivity">
                <div class="w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                    {{-- <div class="w-full text-center h-1/4 p-2 text-xl">
                        1. Push Up
                    </div> --}}
                    <div class="w-full grid grid-cols-3">
                        {{-- Section Image Kiri --}}
                        <div class="h-full p-4 text-center flex justify-center items-center">
                            {{-- Video --}}
                            <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser doesn't support video
                            </video>
                        </div>

                        {{-- Section Kanan Keterangan --}}
                        <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">1. Push Up</h2>
                            <p class="text-sm text-cBlue mt-2">Kcal Burn: 20</p>
                            <p class="text-sm text-cBlue mt-2">Repetisi: 5x</p>
                            <p class="text-sm text-cBlue mt-2">Durasi: 360 detik</p>
                        </div>

                    </div>
                </div>
            </a>
            {{-- Activity Card --}}
            <a href="/workoutactivity">
                <div class="w-full pb-2 rounded-3xl bg-white shadow-lg mb-3">
                    {{-- <div class="w-full text-center h-1/4 p-2 text-xl">
                        1. Push Up
                    </div> --}}
                    <div class="w-full grid grid-cols-3">
                        {{-- Section Image Kiri --}}
                        <div class="h-full p-4 text-center flex justify-center items-center">
                            {{-- Video --}}
                            <video autoplay loop muted playsinline class="rounded-2xl w-full">
                                <source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                Your browser doesn't support video
                            </video>
                        </div>

                        {{-- Section Kanan Keterangan --}}
                        <div class="h-full col-span-2 p-6 flex flex-col justify-center">
                            <h2 class="text-xl mb-3">1. Push Up</h2>
                            <p class="text-sm text-cBlue mt-2">Kcal Burn: 20</p>
                            <p class="text-sm text-cBlue mt-2">Repetisi: 5x</p>
                            <p class="text-sm text-cBlue mt-2">Durasi: 360 detik</p>
                        </div>

                    </div>
                </div>
            </a>

        </div>

        {{-- Done --}}
        <div class="px-8 flex items-center justify-end">
            <label for="default-checkbox" class="mr-4 text-3xl font-bold text-cBlue">DONE</label>
            <input id="default-checkbox" type="checkbox" value="" class="w-7 h-7 text-cBlue bg-gray-100 border-cBlue rounded focus:ring-cBlue focus:ring-2">
        </div>
        <div class="pb-28">
            
        </div>
    </div>

    
    @include('component.navbar')
    
@endsection