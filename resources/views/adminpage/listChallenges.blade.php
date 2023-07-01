@extends('master')

@section('title', 'Challenges - Admin Page')

@section('style')
    <style>
    </style>
@endsection

{{-- Header --}}
<nav class="justify-evenly fixed bg-gradient-to-b from-cLightGrey from-30% to-transparent w-full z-10">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-2 text-2xl">
                <li>
                    <p class="text-cOrange font-extrabold dark:text-white">Challenge</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white">List</p>
                </li>
            </ul>
            @can('admin')
                <a href="/home" class="fixed right-16 -mt-3 text-xs lg:text-lg bg-cOrange hover:bg-white duration-300 ease-out p-3 hover:ring-2 text-white hover:text-cOrange rounded-b-3xl w-16 lg:w-auto text-center ring-cOrange">
                    <div class="pt-3">Go to Home</div>
                </a>
            @endcan
            {{-- <a href="/profile"" class="fixed bg-cOrange rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4 bg-cover mt-2" style="background-image: url({{ '/storage/'. App\Models\User::find(Auth::user()->id)['image'] }})"></div>
            </a> --}}
        </div>
    </div>
</nav>

@section('body')
<div class="w-full">
    {{-- Challenges Plans List --}}
    <div class="px-2 pt-16 w-full md:flex md:items-center md:justify-center md:gap-2 md:flex-wrap lg:flex lg:items-center lg:justify-start lg:gap-2 lg:grid-rows-3 lg:flex-wrap">
        @foreach ($challenges as $challenge)
            {{-- Plan Card --}}
            <div class="lg:w-[400px] lg:h-fit place-content-center h-fit bg-white mb-2 relative rounded-3xl shadow-lg hover:bg-cOrange hover:text-white duration-500 md:items-stretch lg:items-stretch focus:ring-cOrange">
                {{-- <div class="absolute bg-cOrange h-fit w-fit px-4 text-white rounded-bl-3xl rounded-tr-3xl top-0 right-0 text-md">15-17 Apr</div> --}}
                <div class="relative">
                    <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl py-2 px-4 top-0 right-0 absolute text-md">
                        {{ DateTime::createFromFormat('Y-m-d', $challenge->start_date)->format('j M Y') }}
                        -
                        {{ DateTime::createFromFormat('Y-m-d', $challenge->end_date)->format('j M Y') }}
                    </div>
                </div>
                <div class="flex pb-6 pt-10 px-5 items-center">
                    <div class="flex flex-col w-full">
                        <p class="font-semibold items-center text-lg">{{ $challenge->name }}</p>
                        <p class="text-sm h-fit lg:h-[90px]">{{ $challenge->description }}</p>
                        <div class="flex ">
                            <span class="material-symbols-outlined text-cYellow">
                                toll
                            </span>
                            <p>{{ $challenge->points }}</p>
                        </div>
                    </div>
                    <div class="h-fit w-fit flex flex-col gap-2 right-2">
                        <div class="" data-modal-target="popup-edit{{ $loop->iteration }}" data-modal-toggle="popup-edit{{ $loop->iteration }}">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cOrange hover:bg-white hover:text-black text-white">
                                edit
                            </span>
                        </div>
                        <div class="" data-modal-target="popup-delete{{ $loop->iteration }}" data-modal-toggle="popup-delete{{ $loop->iteration }}">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                        </div>
                    </div>
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
                            <form action="/admin/challenges/edit" method="post">
                                @csrf
                                <input type="hidden" name="editId" value="{{ $challenge->id }}">
                                <button data-modal-hide="popup-edit{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                <button data-modal-hide="popup-edit{{ $loop->iteration }}" type="submit" class="text-white bg-cOrange hover:bg-cOrange focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
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
                            <form action="/admin/challenges/destroy" method="post">
                                @csrf
                                <input type="hidden" name="deleteId" value={{ $challenge->id }}>
                                <button data-modal-hide="popup-delete{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
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

{{-- Add Challenges Plan --}}
<x-plus-button link="href=/admin/challenges/add" color="cOrange" group-hover="group-hover:text-cOrange" modal=""/>

{{-- Blank Space --}}
<div class="h-[75px] bg-transparent"></div>
<x-navbar active="challenge" admin="true"/>
@endsection
