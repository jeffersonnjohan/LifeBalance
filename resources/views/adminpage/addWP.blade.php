@extends('master')

@section('title', 'Add Workout Plan - Admin Page')

@section('style')
    <style>
        /* *{
            border: red solid 0.5px;
        } */
    </style>
@endsection

{{-- Header --}}
<nav class="justify-evenly fixed bg-cLightGrey w-full z-10">
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
     {{-- Page Body Section --}}
     <div class="pt-16 bg-cLightGrey w-full">
        <div class="flex flex-row gap-2 pt-2 pb-2 px-3">
            <div class="w-[75%] h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                <input type="text" name="planTitle" id="planTitle" placeholder="Plan Title" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
            </div>
            <div class="w-[25%] h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                <input type="number" name="points" id="points" placeholder="Points" required class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
            </div>
        </div>
        <div class="flex flex-row gap-2 pt-2 pb-2 px-3">
            <div class="w-[75%] h-[120px] rounded-3xl bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                <input type="text" name="description" id="description" placeholder="Description" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
            </div>
            <div class="w-[25%] h-[120px] flex items-center text-cDarkGrey justify-between pl-0">
                <div class="relative w-full aspect-square h-full bg-white rounded-3xl shadow-lg">
                    <input type="file" name="image" id="image" accept="image/*" required class="hidden" onchange="loadFile(event)">
                    <label for="image" class="h-full w-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute" id="imgBox">
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
        {{-- Add Details per Day --}}
        <div  class="px-3">
            <div  class="pt-2 pb-2 ">
                <div class="w-full h-[50px] rounded-full bg-cBlue bg-opacity-50 flex items-center text-cDarkGrey px-4 gap-2">
                    <h2 class="border-transparent bg-transparent text-sm font-bold text-cDarkBlue text-center w-full">Day 1</h2>
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                        delete
                    </span>
                    <span class="material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                        add_circle
                    </span>
                </div>
            </div>
            {{-- Add Excercise --}}
            <div  class="flex flex-row gap-2 w-full h-fit pb-2">
                <div  class="bg-cDarkGrey bg-opacity-10 h-[140px] w-full rounded-3xl px-4 pt-4">
                    <div class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                        <div class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                            <select name="excerciseName" id="excerciseName" class="border-0 bg-transparent w-full h-full rounded-full hover:border-transparent focus-within:border-transparent active:border-transparent">
                                <option value="ExcerciseName">Excercise Name</option>
                                <option value="pushUp">Push Up</option>
                                <option value="sitUp">Sit Up</option>
                                <option value="squat">Squat</option>
                                <option value="plank">Plank</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between pt-2 w-full h-[px] gap-2">
                        <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                            <input type="text" name="repetition" id="repetition" placeholder="Repetition" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        </div>
                        <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg ">
                            <input type="text" name="calories" id="calories" placeholder="Calories" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        </div>
                        <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                            <input type="text" name="duration" id="duration" placeholder="Duration" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        </div>
                    </div>
                </div>
                <span class=" material-symbols-outlined rounded-full h-fit my-auto p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:border-cDarkBlue focus:border-5 focus:border-cDarkblue hover:text-black text-white">
                    delete
                </span>
            </div>
        </div>
        <a href="" class="flex flex-row pt-2 pb-2 text-cBlue place-content-center pr-2">
            <span class="material-symbols-outlined ">
                add
            </span>
            <h3>Add More</h3>
        </a>
        {{-- Confirm Button --}}
        <div class="bottom-0 fixed pb-[80px] w-full px-3">
            <div class="pt-2 pb-2">
                <div class="w-full h-[50px] rounded-full bg-cBlue text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-cDarkBlue focus-within:ring-2 hover:text-cDarkBlue shadow-lg">
                    <input type="submit" name="confirmButton" id="confirmButton" value="Confirm" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                </div>
            </div>
            <div class="pt-2 pb-2 bottom-0">
                <div class="w-full h-[50px] rounded-full bg-cDarkGrey bg-opacity-40 text-cDarkBlue flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                    <input type="submit" name="confirmButton" id="confirmButton" value="Discard" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                </div>
            </div>
        </div>
    </div>
@include('adminpage.adminNavbar', ['active' => 'adminpage.listWorkout'])
@endsection
