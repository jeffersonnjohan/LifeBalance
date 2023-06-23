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
                    <p class="text-cBlue font-extrabold dark:text-white">Workout</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white">Plans</p>
                </li>
            </ul>
            @can('admin')
                <a href="/home" class="fixed right-16 bg-cBlue hover:bg-white duration-300 ease-out p-3 hover:ring-2 text-white hover:text-cBlue rounded-b-3xl w-20 lg:w-auto  text-center">
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
    <div class="w-full h-full lg:flex lg:fixed">
        {{-- Categories --}}
        <div class="lg:w-[30vw]">
            <div class="flex flex-col w-full h-[250px] pt-16 bg-transparent">
                <p class="relative flex text-cDarkBlue h-fit pl-7 lg:ml-0 lg:text-center lg:justify-center">Categories</p>
                <div class="h-[160px] lg:h-[280px] lg:w-full lg:flex-col flex justify-center md:w-[100%] gap-7 lg:gap-7 p-5 lg:mt-32 lg:ml-10 lg:items-center lg:justify-center">
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

        {{-- Workout Plans List --}}
        <div class="pl-5 pr-5 w-full lg:pt-16 lg:flex lg:items-center lg:justify-center lg:gap-2 lg:flex-wrap lg:flex-row lg:overflow-scroll">
            @foreach ($workouts as $workout)
                {{-- Plan Card --}}
                <div class="lg:w-fit lg:h-fit h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cDarkBlue hover:text-white duration-500">
                    {{-- <span class="right-0 top-0 w-fit h-hit rounded-bl-3xl rounded-tr-3xl bg-cRed absolute text-white text-xl px-4">#{{ $loop->iteration }}</span> --}}
                    <div class="flex py-6 px-5 items-center gap-2">
                        <div class="flex items-center w-[85%] justify-center">
                            <div class="flex-col w-[70%]">
                                <p class="font-semibold items-center text-lg">{{ $workout->name }}</p>
                                <p class="text-sm truncate">{{ $workout->description }}</p>
                                <p class="text-sm text-cYellow flex items-center">
                                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                        toll
                                    </span>
                                    {{ $workout->points }} points will be added!
                                </p>
                            </div>
                            {{-- <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')"> --}}
                            <div class="w-[30%] h-fit md:w-40 rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image: url('{{ asset('/storage/'.$workout->image) }}')">
                            </div>
                        </div>
                        <div class="absolute h-fit w-fit flex flex-col gap-2 right-3">
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
                </div>

                {{-- Pop up Edit--}}
                <div id="popup-modal{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal{{ $loop->iteration }}">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">

                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to edit this plan?</h3>
                                <form action="/admin/workout/edit" method="post">
                                    @csrf
                                    <input type="hidden" name="workoutEditID" value="{{ $workout->id }}">
                                    <button data-modal-hide="popup-modal{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    <button data-modal-hide="popup-modal{{ $loop->iteration }}" type="submit" class="popup text-white bg-cGreen hover:bg-cGreen focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pop up Delete--}}
                <div id="popup-delete{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
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
    <x-plus-button link="href=/admin/workout/create" color="cBlue" group-hover="group-hover:text-cBlue" modal=""/>

    {{-- Blank Space --}}
    <div class="h-[75px] bg-transparent"></div>
    <x-navbar active="workout" admin="true"/>
@endsection
