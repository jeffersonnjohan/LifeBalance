@extends('master')

@section('title', 'Workout - Admin Page')
@section('isWorkoutActive', 'activeCategory')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
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
                    <p class="text-cBlue font-extrabold dark:text-white">Workout</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white">Plans</p>
                </li>
            </ul>
            @can('admin')
                <a href="/home" class="fixed right-16 bg-cBlue -mt-3 text-xs lg:text-lg hover:bg-white duration-300 ease-out p-3 hover:ring-2 text-white hover:text-cBlue rounded-b-3xl w-16 lg:w-auto  text-center">
                    <div class="pt-3">Go to Home</div>
                </a>
            @endcan

            {{-- <a href="/profile" class="fixed bg-cBlue rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4 bg-cover mt-2" style="background-image: url({{ '/storage/'. App\Models\User::find(Auth::user()->id)['image'] }})"></div>
            </a> --}}
        </div>
    </div>
</nav>

@section('body')
    <div class="w-full h-full lg:flex">
        <div class="w-full lg:w-[30%] lg:h-full">
            <div class="lg:w-full lg:flex lg:gap-2 lg:fixed lg:h-full">
                <div class="w-full h-[300px] p-10 mb-2 pt-16 bg-cBlue rounded-b-[50px] lg:rounded-bl-[0px] lg:rounded-tr-[50px] lg:w-[30%] lg:h-[90%] lg:mt-16 lg:items-center">
                    {{-- Category Container --}}
                    <div class="h-[160px] flex mt-5 lg:w-full lg:flex-col lg:h-full lg:gap-5 lg:px-5 gap-8 lg:mt-0">
                        {{-- Class selected --}}
                        <a href="/admin/workout" class="w-1/2 lg:w-full lg:h-1/2 lg:items-center lg:justify-center">
                            <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isWorkoutActive')">
                                <div class="h-[65%] w-full bg-cover lg:h-[75%] bg-center" style="background-image: url('/assets/olahragaCategory.png')">
                                </div>
                                <p class="text-center text-white mt-3">Olahraga</p>
                            </div>
                        </a>
                        <a href="/admin/meditation" class="w-1/2 lg:w-full lg:h-1/2 lg:items-center lg:justify-center">
                            <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isMeditationActive')">
                                <div class="h-[65%] w-full bg-cover lg:h-[75%] bg-center" style="background-image: url('/assets/meditasiCategory.png')">
                                </div>
                                <p class="text-center text-white mt-3">Meditasi</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="lg:w-[70%] lg:p-10 lg:pt-32 lg:items-center lg:justify-center lg:content-center">
                    @yield('content')
                </div>
            </div>
        </div>

        {{-- Workout Plans List --}}
        <div class="pl-5 pr-5 w-full lg:w-[70%] lg:pt-16 lg:grid lg:gap-2 lg:grid-cols-2 gap-2 h-fit">
            @foreach ($workouts as $workout)
                <div class="gap-2 lg:h-fit py-8 px-8 flex justify-between items-center w-full h-[150px] bg-white rounded-3xl shadow-lg hover:bg-blue-200 duration-500 focus:ring-cBlue">
                    {{-- Card Plan --}}
                    <div class="w-[50%]">
                        <h2 class="font-semibold text-lg truncate">{{ $workout->name }}</h2>
                        <p class="text-sm truncate"> @excerpt($workout->description)</p>
                        {{-- <p class="text-sm">{{ $workout->description }}</p> --}}
                        <p class="text-sm flex items-center">
                            <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                toll
                            </span>
                            {{ $workout->points }} points will be added!
                        </p>
                    </div>
                    <div class="lg:w-[100px] h-full aspect-square rounded-md border border-cBlue bg-center bg-cover" style="background-image:url('{{ asset('/storage/'.$workout->image) }}')">
                    </div>
                    <div class="w-fit justify-center flex flex-col gap-2 right-5 h-full">
                        <form action="/admin/workout" method="post">
                            <button type="button" data-modal-target="popup-modal{{ $loop->iteration }}" data-modal-toggle="popup-modal{{ $loop->iteration }}">
                                <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                    edit
                                </span>
                            </button>
                        </form>
                        <button type="button" data-modal-target="popup-delete{{ $loop->iteration }}" data-modal-toggle="popup-delete{{ $loop->iteration }}">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </button>
                    </div>
                </div>

                {{-- Pop up Edit--}}
                <div id="popup-modal{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 hidden z-50 lg:z-50 lg:fixed p-4 overflow-x-hidden overflow-y-auto lg:overflow-x-hidden lg:overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal{{ $loop->iteration }}">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center z-50">
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to edit this plan?</h3>
                                <form action="/admin/workout/edit" method="post">
                                    @csrf
                                    <input type="hidden" name="workoutEditID" value="{{ $workout->id }}">
                                    <button data-modal-hide="popup-modal{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    <button data-modal-hide="popup-modal{{ $loop->iteration }}" type="submit" class="popup text-white bg-cBlue hover:bg-cBlue focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pop up Delete--}}
                <div id="popup-delete{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 lg:z-50 lg:fixed hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 z-auto">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-delete{{ $loop->iteration }}">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to delete this plan?</h3>
                                <form action="/admin/workout/delete" method="post">
                                    @csrf
                                    <input type="hidden" name="workoutDeleteID" value="{{ $workout->id }}">
                                    <button data-modal-hide="popup-delete{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    <button data-modal-hide="popup-delete{{ $loop->iteration }}" type="submit" class="popup text-white bg-cRed hover:bg-cRed focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    {{-- Add Workout Plan --}}
    <x-plus-button link="href=/admin/workout/create" color="cBlue" group-hover="group-hover:text-cBlue"/>

    {{-- Blank Space --}}
    <div class="h-[75px] bg-transparent"></div>
    <x-navbar active="workout" admin="true"/>
@endsection
