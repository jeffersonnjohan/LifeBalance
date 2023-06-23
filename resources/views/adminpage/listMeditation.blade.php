@extends('master')

@section('title', 'Meditation - Admin Page')
@section('isMeditationActive', 'activeCategory')

@section('style')
    {{-- <style>
        * {
            border: solid red;
        }
    </style> --}}
@endsection

{{-- Header --}}
@section('header')
<nav class="justify-evenly fixed bg-gradient-to-b from-cLightGrey from-30% to-transparent w-full z-10">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-2 text-2xl">
                <li>
                    <p class="text-cBlue font-extrabold dark:text-white">Meditation</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white">Plans</p>
                </li>
            </ul>
            @can('admin')
                <a href="/home" class="fixed right-16 bg-cBlue hover:bg-white duration-300 ease-out p-3 hover:ring-2 text-white hover:text-cBlue rounded-b-3xl w-20 lg:w-auto text-center">
                    <div class="pt-3">Go to Home</div>
                </a>
            @endcan
            {{-- <a href="/profile"" class="fixed bg-cBlue rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4 bg-cover mt-2" style="background-image: url({{ '/storage/'. App\Models\User::find(Auth::user()->id)['image'] }})"></div>
            </a> --}}
        </div>
    </div>
</nav>

@section('body')
<div class="w-full h-full lg:flex lg:fixed">
    {{-- Categories --}}
    <div class="lg:w-[30vw]">
        <div class="flex flex-col w-full h-[250px] pt-16 bg-transparent">
            <p class="relative flex text-cDarkBlue h-fit pl-7 lg:text-center lg:ml-10 lg:justify-center">Categories</p>
            <div class="h-[160px] lg:h-[280px] lg:gap-7 flex justify-center lg:w-full gap-7 p-5 lg:flex-col lg:mt-32 lg:ml-10 lg:items-center lg:justify-center">
                {{-- Workout Plans --}}
                <a href="/admin/workout" class="w-[50%] lg:w-full">
                    <div class="w-full h-full items-center justify-center flex flex-col bg-cDarkBlue rounded-3xl hover:bg-cBlue duration-500 @yield('isWorkoutActive')">
                        <div class="h-full w-full rounded-t-3xl bg-cover" style="background-image: url('/assets/olahragaCategory.png')"></div>
                        <p class="flex items-center text-center text-white p-2">Workout</p>
                    </div>
                </a>
                {{-- Meditation Plans --}}
                <a href="/admin/meditation" class="w-[50%] lg:w-full">
                    <div class="w-full h-full items-center justify-center flex flex-col bg-cDarkBlue rounded-3xl hover:bg-cBlue duration-500 @yield('isMeditationActive')">
                        <div class="h-full w-full rounded-t-3xl bg-cover" style="background-image: url('/assets/meditasiCategory.png')"></div>
                        <p class="flex items-center text-center text-white p-2">Meditation</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Meditation Plans List --}}
    <div class="pl-5 pr-5 w-full lg:pt-16 lg:flex lg:items-center lg:justify-center lg:gap-2 lg:flex-wrap lg:flex-row lg:overflow-scroll">
        @foreach ($meditations as $meditation)
        {{-- Plan Card --}}
        <div class="lg:w-[348px] lg:h-fit flex h-fit items-center my-2 p-5 relative bg-white rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
            <div class="w-full h-fit text-md font-bold flex text-center content-center items-center justify-center">
                {{ $meditation->name }}
                <span class="material-symbols-outlined">
                    play_arrow
                </span>
            </div>
            <div class="h-fit w-fit flex gap-2 right-5 absolute">
                <a class="" data-modal-target="popup-edit{{ $loop->iteration }}" data-modal-toggle="popup-edit{{ $loop->iteration }}">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        edit
                    </span>
                </a>
                <a class="" data-modal-target="popup-delete{{ $loop->iteration }}" data-modal-toggle="popup-delete{{ $loop->iteration }}">
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                </a>
            </div>
        </div>

        {{-- Pop Up Edit --}}
        <div id="popup-edit{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-edit{{ $loop->iteration }}">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Do you want to edit this plan?</h3>
                        <form action="/admin/meditation/edit" class="flex justify-center" method="post">
                            @csrf
                            <input type="hidden" name="editID" value="{{ $meditation->id }}">
                            <button data-modal-hide="popup-edit{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                Cancel
                            </button>
                            <button data-modal-hide="popup-edit{{ $loop->iteration }}" type="submit" class="text-white bg-cBlue hover:bg-cBlue focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pop Up Delete --}}
        <div id="popup-delete{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-delete{{ $loop->iteration }}">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-6 text-center">
                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to delete this plan?</h3>
                        <form action="/admin/meditation/delete" method="post">
                            @csrf
                            <input type="hidden" name="deleteID" value="{{ $meditation->id }}">
                            <button data-modal-hide="popup-delete{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                Cancel
                            </button>
                            <button data-modal-hide="popup-delete{{ $loop->iteration }}" type="submit" class="text-white bg-cRed hover:bg-cRed focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

{{-- Add Meditation Plan --}}
<x-plus-button link="href=/admin/meditation/create" color="cBlue" group-hover="group-hover:text-cBlue" modal=""/>

{{-- Blank Space --}}
<div class="h-[75px] bg-transparent"></div>
@include('adminpage.adminNavbar', ['active' => 'adminpage.listWorkout'])
@endsection
