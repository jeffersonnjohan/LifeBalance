@extends('master')

@section('title', 'Diet - Admin Page')

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
                    <p class="text-cGreen font-extrabold dark:text-white">Diet</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white">Plans</p>
                </li>
            </ul>
            @can('admin')
                <a href="/home" class="fixed right-16 -mt-3 text-xs lg:text-lg bg-cGreen hover:bg-white duration-300 ease-out p-3 hover:ring-2 text-white hover:text-cGreen rounded-b-3xl w-16 lg:w-auto text-center ring-cGreen">
                    <div class="pt-3">Go to Home</div>
                </a>
            @endcan
            {{-- <a href="/profile"" class="fixed bg-cGreen rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4 bg-cover mt-2" style="background-image: url({{ '/storage/'. App\Models\User::find(Auth::user()->id)['image'] }})"></div>
            </a> --}}
        </div>
    </div>
</nav>

@section('body')
<div class="w-full">
    {{-- Diet Plans List --}}

    <div class="pl-5 pr-5 pt-16 w-full lg:grid lg:grid-cols-3 lg:px-10 lg:gap-5 flex flex-col gap-2">
        @foreach ($diets as $diet)
            {{-- Plan Card --}}
            <div class="w-full lg:h-[150px] bg-white relative lg:rounded-3xl shadow-lg hover:bg-green-200 duration-500 lg:p-5 focus:ring-cGreen rounded-full">
                <div class="flex items-center justify-between px-3 py-1 lg:p-0">
                    <div class="flex gap-3 items-center">
                        <div class="aspect-square lg:rounded-xl rounded-full bg-center justify-end bg-cover items-center h-[50px] lg:h-[100px] border-2 border-cGreen" style="background-image:url('{{ asset('/storage/'.$diet->image) }}')">
                        </div>
                        <div class="flex flex-col w-full h-full">
                            <div class="h-10 w-[90%] lg:h-fit">
                                <h2 class="font-medium text-sm break-normal">{{ $diet->name }}</h2>
                                <h2 class="font-normal text-sm text-cGreen break-normal inline-block">@excerpt($diet->description)</h2>
                            </div>
                            <div class="flex items-center">
                                <span class="material-symbols-outlined text-cYellow">toll</span>
                                <p class="text-xs">{{ $diet->points }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="h-fit w-fit flex lg:flex-col gap-2">
                        <a class="" data-modal-target="popup-edit{{ $loop->iteration }}" data-modal-toggle="popup-edit{{ $loop->iteration }}">
                            <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cGreen hover:bg-white hover:text-black text-white">
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
                                <form action="/admin/diet/edit" method="post">
                                    @csrf
                                    <input type="hidden" name="editID" value="{{ $diet->id }}">
                                    <button data-modal-hide="popup-edit{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    <button data-modal-hide="popup-edit{{ $loop->iteration }}" type="submit" class="text-white bg-cGreen hover:bg-cGreen focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
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
                                <div class="flex justify-center">

                                    <button data-modal-hide="popup-delete{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    <form action="/admin/diet/delete" method="post">
                                        @csrf
                                        <input type="hidden" name="deleteID" value={{ $diet->id }}>
                                        {{-- <a href="#"> --}}
                                            <button data-modal-hide="popup-delete{{ $loop->iteration }}" type="submit" class="text-white bg-cRed hover:bg-cRed focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                Yes
                                            </button>
                                        {{-- </a> --}}
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

{{-- Add Diet Plan --}}
<x-plus-button link="href=/admin/diet/create" color="cGreen" group-hover="group-hover:text-cGreen"/>

{{-- Blank Space --}}
<div class="h-[100px] bg-transparent lg:hidden"></div>
<x-navbar active="diet" admin="true"/>
@endsection
