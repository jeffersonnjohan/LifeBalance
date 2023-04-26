@extends('master')

@section('title', 'Community')

@section('style')
    <style>
    </style>
@endsection

<nav class="justify-evenly fixed bg-cLightGrey w-full">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-2xl">
                <li>
                    <a href="/home" class="text-gray-900 dark:text-white hover:text-[#FF5768]">Home</a>
                </li>
                <li>
                    |
                </li>
                <li>
                    <a href="/community" class="text-[#FF5768] font-extrabold dark:text-white hover:text-[#FF5768]" aria-current="page">Community</a>
                </li>
            </ul>
            <a href="/profile" class="fixed bg-[#FF5768] rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg top-2 right-2 z-10 group duration-300 ease-out hover:bg-cBlue">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a>
        </div>
        <div class="font-light text-cDarkGrey whitespace-break-spaces">See what others has done!</div>
    </div>
</nav>

@section('body')
    <div class="w-full h-fit px-2 pb-2">
        <div class="max-w-screen-xl px-4 py-3 h-20">
        </div>
        <div class="bg-white shadow-lg rounded-3xl mb-2">
            <div class="p-3 flex flex-col text-sm gap-1">
                <div class="flex justify-between">
                    <div class="flex gap-3">
                        <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                            <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile1.png')"></div>
                        </div>
                        <div>
                            <p class="font-bold">Daniel Zerge Wijaya</p>
                            <p class="italic text-cDarkGrey">22 April 2023</p>
                        </div>
                    </div>
                    <div class="w-fit">
                        <p class="bg-cBlue text-white px-2 py- rounded-full font-bold">WORKOUT</p>
                    </div>
                </div>
                <div>
                    <p>has completed "7 Days Barbell Workout"</p>
                </div>
            </div>
            <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/post1.png')"></div>
        </div>
        <div class="bg-white shadow-lg rounded-3xl mb-2">
            <div class="p-3 flex flex-col text-sm gap-1">
                <div class="flex justify-between">
                    <div class="flex gap-3">
                        <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                            <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile2.png')"></div>
                        </div>
                        <div>
                            <p class="font-bold">Nadya Clarine Purba</p>
                            <p class="italic text-cDarkGrey">22 March 2023</p>
                        </div>
                    </div>
                    <div class="w-fit">
                        <p class="bg-cGreen text-white px-2 py- rounded-full font-bold">DIET</p>
                    </div>
                </div>
                <div>
                    <p>has completed "7 Days Vegetable Diet"</p>
                </div>
            </div>
            <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/post2.png')"></div>
        </div>
        <div class="bg-white shadow-lg rounded-3xl mb-2">
            <div class="p-3 flex flex-col text-sm gap-1">
                <div class="flex justify-between">
                    <div class="flex gap-3">
                        <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                            <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile2.png')"></div>
                        </div>
                        <div>
                            <p class="font-bold">Winita Teukeku Priyanto</p>
                            <p class="italic text-cDarkGrey">22 February 2023</p>
                        </div>
                    </div>
                    <div class="w-fit">
                        <p class="bg-cGreen text-white px-2 py- rounded-full font-bold">DIET</p>
                    </div>
                </div>
                <div>
                    <p>has completed "30 Days Diet for Healthy Eyes"</p>
                </div>
            </div>
            <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/eyediet.jpeg')"></div>
        </div>
        <div class="bg-white shadow-lg rounded-3xl mb-2">
            <div class="p-3 flex flex-col text-sm gap-1">
                <div class="flex justify-between">
                    <div class="flex gap-3">
                        <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                            <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile1.png')"></div>
                        </div>
                        <div>
                            <p class="font-bold">Jefferson Johan</p>
                            <p class="italic text-cDarkGrey">22 January 2023</p>
                        </div>
                    </div>
                    <div class="w-fit">
                        <p class="bg-cBlue text-white px-2 py- rounded-full font-bold">MEDITATION</p>
                    </div>
                </div>
                <div>
                    <p>has completed "1 Day of Meditation"</p>
                </div>
            </div>
            <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/meditasiCategory.png')"></div>
        </div>
    </div>
    @include('component.navbar', ['active' => 'home'])
    @include('component.navbar')
@endsection
