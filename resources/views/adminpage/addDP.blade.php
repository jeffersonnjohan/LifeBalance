@extends('master')

@section('title', 'Add Diet Plan - Admin Page')

@section('style')
    <style>
        /* *{
            border: red solid 0.5px;
        } */
    </style>
@endsection

{{-- Header --}}
<nav class="justify-evenly fixed bg-gradient-to-b from-cLightGrey from-30% to-transparent w-full z-10">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-2 text-2xl">
                <li>
                    <p class="text-cGreen font-extrabold dark:text-white hover:text-cGreen">Diet</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white hover:text-cGreen">Plans</p>
                </li>
            </ul>
            <a href="#" class="fixed bg-cGreen rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a>
        </div>
    </div>
</nav>

@section('body')
        {{-- Page Body Section --}}
        <div class="pt-16 bg-cLightGrey w-full overflow-auto">
            <div class="flex flex-row gap-2 pt-2 pb-2 px-3 ">
                <div class="ring-cGreen hover:ring-cGreen w-[75%] h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2  focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                    <input type="text" name="planTitle" id="planTitle" placeholder="Plan Title" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                </div>
                <div class="ring-cGreen hover:ring-cGreen w-[25%] h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                    <input type="number" name="points" id="points" placeholder="Points" required class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                </div>
            </div>
            <div class="flex flex-row gap-2 pt-2 pb-2 px-3">
                <div class="ring-cGreen hover:ring-cGreen w-[75%] h-[120px] rounded-3xl bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                    <input type="text" name="description" id="description" placeholder="Description" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                </div>
                <div class="w-[25%] h-[120px] flex items-center text-cDarkGrey justify-between pl-0">
                    <div class="relative w-full aspect-square h-full bg-white rounded-3xl shadow-lg">
                        <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" required class="hidden" onchange="loadFile(event)">
                        <label for="image" class="h-full w-full ring-cGreen hover:ring-cGreen aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cGreen bg-cover bg-center absolute" id="imgBox">
                        </label>
                        <div class="h-full w-full flex flex-col justify-center items-center p-2">
                            <span class="material-symbols-outlined">
                                image
                            </span>
                            <div class="text-sm text-center">
                                <p>Input Img</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Add Plan per Days --}}
            <div class="px-3">
                <div class="pt-2 pb-2">
                    <div class="w-full h-[50px] rounded-full bg-cGreen bg-opacity-50 flex items-center text-cDarkGrey px-4">
                        <h2 class="border-transparent bg-transparent text-sm font-bold text-cDarkBlue text-center w-full">Day 1</h2>
                    </div>
                </div>
                {{-- Add Food Recomendation --}}
                <div class="flex flex-row w-full h-[200px] bg-black bg-opacity-10 pt-2 rounded-3xl">
                    <div class="flex p-2 w-[75%] h-[90%]">
                        <div class="place-content-center h-full w-full rounded-3xl bg-white flex items-center text-cDarkGrey duration-300 ring-cGreen hover:ring-cGreen hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen">
                            <textarea type="text" name="description" id="description" placeholder="Description
(e.g.,
Breakfast : 500 gr
Apel Lunch  : Nasi Padang
Dinner : Es buah)" required class="h-[120px] resize-none border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full "></textarea>
                        </div>
                    </div>
                    <div class="w-[25%] h-full p-2">
                        <div class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 ring-cGreen hover:ring-cGreen hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                            <input type="number" name="calories" id="calories" placeholder="Calories" required class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        </div>
                    </div>
                </div>
            </div>
            {{-- <input type="button" name="buttonAdd" id="buttonAdd" placeholder="Add More" required class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full"> --}}
            <a href="" class="mb-10 flex flex-row pt-2 pb-2 text-cGreen place-content-end pr-2">
                <span class="material-symbols-outlined ">
                    add
                </span>
                <h3>Add More</h3>
            </a>
            {{-- Confirm Button --}}
            <div class="bottom-0 sticky pb-[80px] w-full px-3">
                <div class="pt-2 pb-2">
                    <div class="w-full h-[50px] rounded-full bg-cGreen text-white flex items-center font-bold px-4 duration-300 hover:ring-2 ring-cGreen focus-within:text-white focus-within:ring-2 hover:text-cGreen hover:bg-white shadow-lg">
                        <input type="submit" name="confirmButton" id="confirmButton" value="Confirm" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                </div>
                <div class="pt-2 pb-2 bottom-0">
                    <div class="ring-cRed hover:ring-cRed w-full h-[50px] rounded-full bg-cRed text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white focus-within:ring-2 hover:text-cRed hover:bg-white shadow-lg">
                        <input type="submit" name="discard" id="discardButton" value="Discard" required class="border-transparent bg-transparent focus:ring-0 focus :border-transparent text-sm w-full">
                    </div>
                </div>
            </div>
        </div>
@include('adminpage.adminNavbar', ['active' => 'adminpage.listDiet'])
@endsection

@section('scripts')
    <script>

    </script>
@endsection
