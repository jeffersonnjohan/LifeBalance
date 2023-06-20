@extends('master')

@section('title', 'Add Challenge - Admin Page')

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
                    <p class="text-cOrange font-extrabold dark:text-white hover:text-cOrange">Challenge</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white hover:text-cOrange">List</p>
                </li>
            </ul>
            <a href="/profile"
                class="fixed bg-cOrange rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4 bg-cover mt-2"
                    style="background-image: url({{ '/storage/' . App\Models\User::find(Auth::user()->id)['image'] }})">
                </div>
            </a>
        </div>
    </div>
</nav>

@section('body')
@csrf
{{-- Page Body Section --}}
<form action="/admin/challenges" method="post" class="pt-16 bg-cLightGrey w-full overflow-auto lg:flex lg:flex-row lg:w-full">
        @csrf
    <div
        class="lg:fixed lg:bg-cOrange lg:flex lg:flex-col lg:place-content-center lg:m-auto lg:h-full lg:rounded-r-[100px] lg:w-[25%]">
        <div class="lg:relative">
            <div class="flex flex-row lg:flex-col gap-2 pt-2 pb-2 px-3 ">
                <div
                    class="ring-cOrange hover:ring-cOrange w-[75%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2  focus-within:text-cOrange focus-within:ring-2 hover:text-cOrange shadow-lg">
                    <input type="text" name="planTitle" id="planTitle" placeholder="Plan Title" required
                        class="text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full p-0">
                </div>
                <div
                    class="ring-cOrange hover:ring-cOrange w-[25%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cOrange focus-within:ring-2 hover:text-cOrange shadow-lg">
                    <input type="number" name="points" id="points" placeholder="Points" required
                        class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full p-0">
                </div>
            </div>
            <div class="flex flex-row lg:flex-col lg:pt-0 gap-2 pt-2 pb-2 px-3 ">
                <div
                    class="ring-cOrange hover:ring-cOrange w-full lg:w-full h-[120px] rounded-3xl bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cOrange focus-within:ring-2 hover:text-cOrange shadow-lg">
                    {{-- <input type="text" name="description" id="description" placeholder="Description" required
                        class="text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full p-0"> --}}
                        <textarea type="text" name="description" id="description" placeholder="Description" required class="p-0 lg:py-10 pt text-left lg:text-center lg:self-center h-[100px] resize-none border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:flex lg:flex-col lg:w-[75%] lg:ml-[25%]">
        <div class="flex flex-row gap-2 pt-2 pb-2 px-3">
            <div
                class="ring-cOrange hover:ring-cOrange w-[50%] h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2  focus-within:text-cOrange focus-within:ring-2 hover:text-cOrange shadow-lg ">
                <input type="text" name="startDate" id="startDate" placeholder="Start Date" required
                    class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full p-0 "
                    onfocus="(this.type='date')" onblur="(this.type= this.value ? 'date' : 'text')">
            </div>
            <div
                class="ring-cOrange hover:ring-cOrange w-[50%] h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2  focus-within:text-cOrange focus-within:ring-2 hover:text-cOrange shadow-lg ">
                <input type="text" name="endDate" id="endDate" placeholder="End Date" required
                    class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full p-0"
                    onfocus="(this.type='date')" onblur="(this.type= this.value ? 'date' : 'text')">
            </div>
        </div>
        <div class="flex flex-row lg:flex-col gap-2 pt-2 pb-2 px-3">
            <div
                class="ring-cOrange hover:ring-cOrange w-[50%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2  focus-within:text-cOrange focus-within:ring-2 hover:text-cOrange shadow-lg ">
                <input type="number" name="totalWorkout" id="totalWorkout" placeholder="Total Workout" required
                    class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full p-0 ">
            </div>
            <div
                class="ring-cOrange hover:ring-cOrange w-[50%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2  focus-within:text-cOrange focus-within:ring-2 hover:text-cOrange shadow-lg ">
                <input type="number" name="totalDiet" id="totaDiet" placeholder="Total Diet" required
                    class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full p-0 ">
            </div>
        </div>


        <div class="pb-24"></div>
        {{-- Confirm Button --}}
        <div class="bottom-0 fixed pb-4 w-full px-3 lg:pb-0 ">
            <div class="lg:fixed lg:right-0 lg:left-[25%] lg:px-4 lg:pb-2 lg:flex-row lg:flex lg:gap-2 lg:bottom-0">
                <div class="pt-2 pb-2 lg:w-[50%]">
                    <div
                        class="w-full h-[50px] rounded-full bg-cOrange text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white focus-within:ring-2 hover:text-cOrange hover:bg-white shadow-lg ring-cOrange hover:ring-cOrange">
                        <button type="submit" name="confirmButton" id="confirmButton"
                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full cursor-pointer">Confirm</button>
                    </div>
                </div>
                <div class="pt-2 pb-2 bottom-0 lg:w-[50%]">
                    <a href="/admin/challenges"
                        class="w-full h-[50px] rounded-full bg-cRed text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white focus-within:ring-2 hover:text-cRed hover:bg-white shadow-lg ring-cRed hover:ring-cRed">
                        <div
                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full text-center">
                            Discard</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>
    {{-- @include('adminpage.adminNavbar', ['active' => 'adminpage.listChallenges']) --}}
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        // Untuk Preview Image
        var loadFile = function(event) {
            imgBox.style.backgroundImage = 'url(' + URL.createObjectURL(event.target.files[0]) + ')';
        }
    </script>
@endsection
