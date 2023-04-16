@extends('master')

@section('title', 'Diet')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('body')
    <div class="bg-cLightGrey h-full w-full mb-28">
        <div class="bg-cGreen h-fit rounded-b-[50px] ">
            <h1 class="text-white text-3xl font-normal text-left p-6 pt-16">Jaga Pola Makan Anda dari Dini!</h1>
            <div class="place-items-center grid pb-6">
                <div class="bg-white flex w-[90%] items-center justify-between rounded-xl shadow-sm mb-4 duration-300 hover:ring-2">
                    <input type="text" name="saerchDiet" id="searchDiet" placeholder="Searching for new plan?" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-black text-left font-normal p-2 w-full">
                    <span class="material-symbols-outlined p-2">
                        search
                    </span>
                </div>
            </div>

        </div>
        <h2 class="text-xl p-2 font-medium ml-3 mt-2">Plan</h2>
        <div class="place-items-center grid p-2">
            <div class="bg-white w-[95%] h-fit place-content-center rounded-3xl p-2 flex flex-row justify-between shadow-sm" >
                <div class="flex flex-row items-center">
                    <div class="rounded-full bg-cover justify-end items-center h-16 w-16  m-2 border-2 border-cGreen" style="background-image: url('assets/dietMediterania.png')"></div>
                    <div>
                        <h2 class="font-medium text-lg">Diet Mediterania</h2>
                        <h2 class="font-normal text-md text-cGreen">Seven days diet plan</h2>
                    </div>
                </div>
                <div class="flex flex-row items-center p-2">
                    <span class="material-symbols-outlined text-cYellow">
                        toll
                    </span>
                    <h3 class="font-medium text-md">5</h3>
                </div>
            </div>
        </div>
        <div class="place-items-center grid p-2">
            <div class="bg-white w-[95%] h-fit place-content-center rounded-3xl p-2 flex flex-row justify-between shadow-sm">
                <div class="flex flex-row items-center">
                    <div class="rounded-full bg-cover justify-end items-center h-16 w-16  m-2 border-2 border-cGreen" style="background-image: url('assets/dietVegetarian.png')"></div>
                    <div>
                        <h2 class="font-medium text-lg">Diet Vegetarian</h2>
                        <h2 class="font-normal text-md text-cGreen">Seven days diet plan</h2>
                    </div>
                </div>
                <div class="flex flex-row items-center p-2">
                    <span class="material-symbols-outlined text-cYellow">
                        toll
                    </span>
                    <h3 class="font-medium text-md">5</h3>
                </div>
            </div>
        </div>
        <a href="/planDiet" class="place-items-center grid p-2 ">
            <div class="bg-white w-[95%] h-fit place-content-center rounded-3xl p-2 flex flex-row justify-between shadow-sm  group duration-300 ease-out hover:bg-green-200 focus:ring-cGreen">
                <div class="flex flex-row items-center">
                    <div class="rounded-full bg-cover justify-end items-center h-16 w-16  m-2 border-2 border-cGreen" style="background-image: url('assets/intermittentFasting.png')"></div>
                    <div>
                        <h2 class="font-medium text-lg">Intermittent Fasting</h2>
                        <h2 class="font-normal text-md text-cGreen">Seven days diet plan</h2>
                    </div>
                </div>
                <div class="flex flex-row items-center p-2">
                    <span class="material-symbols-outlined text-cYellow">
                        toll
                    </span>
                    <h3 class="font-medium text-md">5</h3>
                </div>
            </div>
        </a>
        <div class="place-items-center grid p-2">
            <div class="bg-white w-[95%] h-fit place-content-center rounded-3xl p-2 flex flex-row justify-between shadow-sm">
                <div class="flex flex-row items-center">
                    <div class="rounded-full bg-cover justify-end items-center h-16 w-16  m-2 border-2 border-cGreen" style="background-image: url('assets/dietMediterania.png')"></div>
                    <div>
                        <h2 class="font-medium text-lg">Diet Mediterania</h2>
                        <h2 class="font-normal text-md text-cGreen">Seven days diet plan</h2>
                    </div>
                </div>
                <div class="flex flex-row items-center p-2">
                    <span class="material-symbols-outlined text-cYellow">
                        toll
                    </span>
                    <h3 class="font-medium text-md">5</h3>
                </div>
            </div>
        </div>
        <div class="place-items-center grid p-2">
            <div class="bg-white w-[95%] h-fit place-content-center rounded-3xl p-2 flex flex-row justify-between shadow-sm">
                <div class="flex flex-row items-center">
                    <div class="rounded-full bg-cover justify-end items-center h-16 w-16  m-2 border-2 border-cGreen" style="background-image: url('assets/dietVegetarian.png')"></div>
                    <div>
                        <h2 class="font-medium text-lg">Diet Vegetarian</h2>
                        <h2 class="font-normal text-md text-cGreen">Seven days diet plan</h2>
                    </div>
                </div>
                <div class="flex flex-row items-center p-2">
                    <span class="material-symbols-outlined text-cYellow">
                        toll
                    </span>
                    <h3 class="font-medium text-md">5</h3>
                </div>
            </div>
        </div>
        <div class="place-items-center grid p-2">
            <div class="bg-white w-[95%] h-fit place-content-center rounded-3xl p-2 flex flex-row justify-between shadow-sm">
                <div class="flex flex-row items-center">
                    <div class="rounded-full bg-cover justify-end items-center h-16 w-16  m-2 border-2 border-cGreen" style="background-image: url('assets/intermittentFasting.png')"></div>
                    <div>
                        <h2 class="font-medium text-lg">Intermittent Fasting</h2>
                        <h2 class="font-normal text-md text-cGreen">Seven days diet plan</h2>
                    </div>
                </div>
                <div class="flex flex-row items-center p-2">
                    <span class="material-symbols-outlined text-cYellow">
                        toll
                    </span>
                    <h3 class="font-medium text-md">5</h3>
                </div>
            </div>
        </div>
    </div>
    @include('component.navbar')
@endsection
