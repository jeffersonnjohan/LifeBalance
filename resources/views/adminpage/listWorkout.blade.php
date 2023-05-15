@extends('master')

@section('title', 'Workout - Admin Page')
@section('isWorkoutActive', 'activeCategory')

{{-- Header --}}
@section('header')
<nav class="justify-evenly fixed bg-gradient-to-b from-cLightGrey from-30% to-transparent w-full z-10">
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
    <div class="w-full">
        {{-- Categories --}}
        <div class="flex flex-col w-full h-[250px] pt-16 bg-transparent md:h-[330px]">
            <p class="relative flex text-cDarkBlue h-fit pl-7 md:pl-0 md:text-center md:justify-center">Categories</p>
            <div class="h-[160px] md:h-[250px] flex justify-center md:w-[100%] gap-3 md:gap-7 p-5">
                {{-- Workout Plans --}}
                <a href="/admin/workout" class="w-[50%] md:w-[30%]">
                    <div class="w-full h-full items-center justify-center flex flex-col bg-cDarkBlue rounded-3xl hover:bg-cBlue duration-500 @yield('isWorkoutActive')">
                        <div class="h-full w-full rounded-t-3xl bg-cover" style="background-image: url('/assets/olahragaCategory.png')"></div>
                        <p class="flex items-center text-center text-white p-2">Workout</p>
                    </div>
                </a>
                {{-- Meditation Plans --}}
                <a href="/admin/meditation" class="w-[50%] md:w-[30%]">
                    <div class="w-full h-full items-center justify-center flex flex-col bg-cDarkBlue rounded-3xl hover:bg-cBlue duration-500 @yield('isMeditationActive')">
                        <div class="h-full w-full rounded-t-3xl bg-cover" style="background-image: url('/assets/meditasiCategory.png')"></div>
                        <p class="flex items-center text-center text-white p-2">Meditation</p>
                    </div>
                </a>
            </div>
        </div>

        {{-- Workout Plans List --}}
        <div class="pl-5 pr-5 w-full">
            {{-- Plan Card --}}
            <div class="h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
                <span class="right-0 top-0 w-fit h-hit rounded-bl-3xl rounded-tr-3xl bg-cRed absolute text-white text-xl px-4">#1</span>
                <div class="flex py-6 px-5 items-center gap-2">
                    <div class="flex items-center w-[85%] justify-center">
                        <div class="flex-col w-[70%]">
                            <p class="font-semibold items-center text-lg">BURN FAT IN 7 DAYS!</p>
                            <p class="text-sm truncate">Workout Program (Results in 1 week) include</p>
                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                5 points will be added!
                            </p>
                        </div>
                        <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                        </div>
                    </div>
                    <div class="absolute h-fit w-fit flex flex-col gap-2 right-3">
                        <a href="#" class="" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                edit
                            </span>
                        </a>
                        <a href="#" class="" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Plan Card --}}
            <div class="h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
                <span class="right-0 top-0 w-fit h-hit rounded-bl-3xl rounded-tr-3xl bg-cRed absolute text-white text-xl px-4">#1</span>
                <div class="flex py-6 px-5 items-center gap-2">
                    <div class="flex items-center w-[85%] justify-center">
                        <div class="flex-col w-[70%]">
                            <p class="font-semibold items-center text-lg">BURN FAT IN 7 DAYS!</p>
                            <p class="text-sm truncate">Workout Program (Results in 1 week) include</p>
                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                5 points will be added!
                            </p>
                        </div>
                        <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                        </div>
                    </div>
                    <div class="absolute h-fit w-fit flex flex-col gap-2 right-3">
                        <a href="#" class="" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                edit
                            </span>
                        </a>
                        <a href="#" class="" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Plan Card --}}
            <div class="h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
                <span class="right-0 top-0 w-fit h-hit rounded-bl-3xl rounded-tr-3xl bg-cRed absolute text-white text-xl px-4">#1</span>
                <div class="flex py-6 px-5 items-center gap-2">
                    <div class="flex items-center w-[85%] justify-center">
                        <div class="flex-col w-[70%]">
                            <p class="font-semibold items-center text-lg">BURN FAT IN 7 DAYS!</p>
                            <p class="text-sm truncate">Workout Program (Results in 1 week) include</p>
                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                5 points will be added!
                            </p>
                        </div>
                        <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                        </div>
                    </div>
                    <div class="absolute h-fit w-fit flex flex-col gap-2 right-3">
                        <a href="#" class="" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                edit
                            </span>
                        </a>
                        <a href="#" class="" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Plan Card --}}
            <div class="h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
                <span class="right-0 top-0 w-fit h-hit rounded-bl-3xl rounded-tr-3xl bg-cRed absolute text-white text-xl px-4">#1</span>
                <div class="flex py-6 px-5 items-center gap-2">
                    <div class="flex items-center w-[85%] justify-center">
                        <div class="flex-col w-[70%]">
                            <p class="font-semibold items-center text-lg">BURN FAT IN 7 DAYS!</p>
                            <p class="text-sm truncate">Workout Program (Results in 1 week) include</p>
                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                5 points will be added!
                            </p>
                        </div>
                        <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                        </div>
                    </div>
                    <div class="absolute h-fit w-fit flex flex-col gap-2 right-3">
                        <a href="#" class="" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                edit
                            </span>
                        </a>
                        <a href="#" class="" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Plan Card --}}
            <div class="h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
                <span class="right-0 top-0 w-fit h-hit rounded-bl-3xl rounded-tr-3xl bg-cRed absolute text-white text-xl px-4">#1</span>
                <div class="flex py-6 px-5 items-center gap-2">
                    <div class="flex items-center w-[85%] justify-center">
                        <div class="flex-col w-[70%]">
                            <p class="font-semibold items-center text-lg">BURN FAT IN 7 DAYS!</p>
                            <p class="text-sm truncate">Workout Program (Results in 1 week) include</p>
                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                5 points will be added!
                            </p>
                        </div>
                        <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                        </div>
                    </div>
                    <div class="absolute h-fit w-fit flex flex-col gap-2 right-3">
                        <a href="#" class="" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                edit
                            </span>
                        </a>
                        <a href="#" class="" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Plan Card --}}
            <div class="h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
                <span class="right-0 top-0 w-fit h-hit rounded-bl-3xl rounded-tr-3xl bg-cRed absolute text-white text-xl px-4">#1</span>
                <div class="flex py-6 px-5 items-center gap-2">
                    <div class="flex items-center w-[85%] justify-center">
                        <div class="flex-col w-[70%]">
                            <p class="font-semibold items-center text-lg">BURN FAT IN 7 DAYS!</p>
                            <p class="text-sm truncate">Workout Program (Results in 1 week) include</p>
                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                5 points will be added!
                            </p>
                        </div>
                        <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                        </div>
                    </div>
                    <div class="absolute h-fit w-fit flex flex-col gap-2 right-3">
                        <a href="#" class="" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                edit
                            </span>
                        </a>
                        <a href="#" class="" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- Pop Up Edit --}}
            <div id="popup-edit" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-edit">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Do you want to edit this plan?</h3>
                            <button data-modal-hide="popup-edit" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            <a href="/admin/workout/edit">
                                <button data-modal-hide="popup-edit" type="button" class="text-white bg-cBlue hover:bg-cBlue focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Yes
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Pop Up Delete --}}
            <div id="popup-delete" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-delete">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-6 text-center">
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to delete this plan?</h3>
                            <button data-modal-hide="popup-delete" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                            <a href="#">
                                <button data-modal-hide="popup-delete" type="button" class="text-white bg-cRed hover:bg-cRed focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Yes
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- Add Workout Plan --}}
    <a href="/admin/workout/create" class="object-bottom fixed bg-black rounded-full flex justify-center items-center aspect-square h-[50px] shadow-lg bottom-20 right-2 z-10 group duration-300 ease-out hover:bg-cBLue">
        <span class="material-symbols-outlined scale-110 duration-300 ease-out group-hover:text-white text-white mb-100px">
            add
        </span>
    </a>

    {{-- Blank Space --}}
    <li class="h-[75px] bg-transparent"></li>
    @include('adminpage.adminNavbar', ['active' => 'adminpage.listWorkout'])
@endsection
