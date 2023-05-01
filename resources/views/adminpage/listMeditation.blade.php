@extends('master')

@section('title', 'Meditation - Admin Page')
@section('isMeditationActive', 'activeCategory')

{{-- Header --}}
@section('header')
<nav class="justify-evenly fixed bg-cLightGrey w-full z-10">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-2 text-2xl">
                <li>
                    <p class="text-cBlue font-extrabold dark:text-white hover:text-cBlue">Meditation</p>
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
    <div class="w-full h-[300px] p-10 pt-16 bg-transparent">
        <p class="text-cDarkBlue mt-2">Categories</p>
        <div class="w-80% h-[160px] flex mt-2 justify-between mb-5">
            {{-- Workout Plans --}}
            <a href="/admin/workout" class="w-[48%]">
                <div class="w-full h-full items-center justify-center flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden md:bg-transparent @yield('isWorkoutActive')">
                    <div class="h-[75%] -mt-3 md:w-[30%] w-full bg-cover" style="background-image: url('/assets/olahragaCategory.png')"></div>
                    <p class="text-center text-white mt-2 md:text-cDarkBlue">Workout</p>
                </div>
            </a>
            {{-- Meditation Plans --}}
            <a href="/admin/meditation" class="w-[48%]">
                <div class="w-full h-full items-center justify-center flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden md:bg-transparent @yield('isMeditationActive')">
                    <div class="h-[75%] -mt-3 md:w-[30%] w-full bg-cover" style="background-image: url('/assets/meditasiCategory.png')"></div>
                    <p class="text-center text-white mt-2 md:text-cDarkBlue">Meditation</p>
                </div>
            </a>
        </div>
    </div>

    {{-- Meditation Plans List --}}
    <div class="pl-5 pr-5 w-full">
        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Nature
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Ambient
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Nature
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Ambient
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Ambient
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Nature
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Ambient
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Plan Card --}}
        <div class="flex justify-between h-[70px] items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-[90%]">
                <h2 class="w-full text-md ml-10 font-bold flex text-center justify-center">
                    Nature
                    <span class="material-symbols-outlined">
                        play_arrow
                    </span>
                </h2>
            </div>
            <div class="w-[10%] h-full flex justify-center items-center mr-5">
                <a href="#" class="p-2" data-modal-target="popup-edit" data-modal-toggle="popup-edit">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a href="#" class="p-2" data-modal-target="popup-delete" data-modal-toggle="popup-delete">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
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
                        <a href="/admin/meditation/edit">
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

{{-- Add Meditation Plan --}}
<a href="/admin/meditation/add" class="object-bottom fixed bg-black rounded-full flex justify-center items-center aspect-square h-[50px] shadow-lg bottom-20 right-2 z-10 group duration-300 ease-out hover:bg-cBLue">
    <span class="material-symbols-outlined scale-110 duration-300 ease-out group-hover:text-white text-white mb-100px">
        add
    </span>
</a>

{{-- Blank Space --}}
<li class="h-[75px] bg-transparent"></li>
@include('adminpage.adminNavbar', ['active' => 'adminpage.listWorkout'])
@endsection