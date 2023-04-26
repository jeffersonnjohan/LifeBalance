@extends('master')

@section('title', 'Home')

@section('style')
    <style>
    </style>
@endsection

<nav class="justify-evenly fixed bg-cLightGrey w-full">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-2xl">
                <li>
                    <a href="/home" class="text-[#FF5768] font-extrabold dark:text-white hover:text-[#FF5768]">Home</a>
                </li>
                <li>
                    |
                </li>
                <li>
                    <a href="/community" class="text-gray-900 dark:text-white hover:text-[#FF5768]" aria-current="page">Community</a>
                </li>
            </ul>
            <a href="/profile" class="fixed bg-[#FF5768] rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg top-2 right-2 z-10 group duration-300 ease-out hover:bg-cBlue">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a>
        </div>
        <p class="font-light text-cDarkGrey">Let's see your daily progress!</p>
    </div>
</nav>

@section('body')
<div class="w-full h-fit px-2 pb-2">
    <div class="max-w-screen-xl px-4 py-3 h-20"></div>
    <div class="text-center font-bold text-xl">Good Morning, {(username)}!</div>
        {{-- @foreach ($arrUser as $usr)
        <h1>{{$usr}}</h1>
        @endforeach --}}
    <div class="max-w-screen-xl px-4 py-2"></div>

    {{-- component.userprogress.blade.php --}}
    <div class="bg-white shadow-lg rounded-3xl h-60">
        <div class="whitespace-break-spaces p-5 flex flex-col text-xl font-bold gap-2 ml-5">
            Your Progress

            ABC TOTAL KCAL


        </div>
    </div>

    {{-- component.featuresbanner.blade.php --}}
    <div class="bg-white shadow-lg mt-3 items-stretch rounded-3xl h-60 py-3">
        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/blue.png" class="absolute block w-40 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/green.png" class="absolute block w-40 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/assets/orange.png" class="absolute block w-40 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    {{-- component.ongoingplan.blade.php --}}
    <ul role="contentinfo" class="py-3">
        <a href="#" class="flex flex-col items-center bg-white rounded-3xl h-100 shadow-lg md:flex-row hover:bg-cLightGrey dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover rounded-t-lg h-40 m-5 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/assets/eyediet.jpeg" alt="">
            <div class="flex flex-col justify-between leading-normal">
                <p class="mb-2 font-normal text-[#FF5768] dark:text-gray-400">Continue your plan.</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">30 Days Diet Plan for a Healthy Eyes</h5>
                <div class="w-full mb-5 bg-gray-200 rounded-full dark:bg-gray-700 mb-3">
                    <div class="bg-[#FF5768] text-xs font-medium text-pink-100 text-center leading-none rounded-full" style="width: 45%"> 45%</div>
                </div>
            </div>
        </a>
    </ul>

    {{-- component.graph_bodyweight.blade.php --}}
    <ul role="contentinfo" class="py-3">
        <div class="text-center font-bold text-xl m-5">Progress Charts</div>
        <!-- component -->
        <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50">Body Weight Statistic</div>
            <canvas class="p-10" id="chartLine"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart line -->
        <script>
            const labels = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            const data = {
            labels: labels,
            datasets: [
                {
                label: "My Weight in Kg",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [60, 60, 58, 59, 57, 58, 57],
                },
            ],
            };

            const configLineChart = {
            type: "line",
            data,
            options: {},
            };

            var chartLine = new Chart(
            document.getElementById("chartLine"),
            configLineChart
            );
        </script>
    </ul>

    {{-- component.graph_calorieintake.blade.php --}}
    <ul role="contentinfo" class="py-3">
        <!-- component -->
        <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50">Calorie Intake Statistic</div>
            <canvas class="p-10" id="chartLine"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart line -->
        <script>
            const labels = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            const data = {
            labels: labels,
            datasets: [
                {
                label: "My Weight in Kg",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [60, 60, 58, 59, 57, 58, 57],
                },
            ],
            };

            const configLineChart = {
            type: "line",
            data,
            options: {},
            };

            var chartLine = new Chart(
            document.getElementById("chartLine"),
            configLineChart
            );
        </script>
    </ul>


    {{-- component.graph_calorieleft.blade.php --}}
    <ul role="contentinfo" class="py-3">
        <!-- component -->
        <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50">Calorie Left Statistic</div>
            <canvas class="p-10" id="chartLine"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart line -->
        <script>
            const labels = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            const data = {
            labels: labels,
            datasets: [
                {
                label: "My Weight in Kg",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [60, 60, 58, 59, 57, 58, 57],
                },
            ],
            };

            const configLineChart = {
            type: "line",
            data,
            options: {},
            };

            var chartLine = new Chart(
            document.getElementById("chartLine"),
            configLineChart
            );
        </script>
    </ul>

    {{-- component.leaderboard.blade.php --}}
    <ul role="list" class="divide-y divide-gray-100 py-3">
        <div class="text-center font-bold text-xl m-5">Leaderboard</div>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/female.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Winita Teukeku Priyanto</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
            {{-- <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p> --}}
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/male.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Daniel Zerge Wijaya</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/female.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Chrystalia Glenys Winata Ang</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/male.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Jefferson Johan</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/female.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Nadya Clarine Purba</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>

        <li class="flex justify-between items-center gap-x-6 m-3 p-5 bg-white rounded-3xl shadow-lg"></li>
      </ul>

    {{-- + button, href -> home_community.inputweight.blade.php --}}
    <a href="/inputweight" class=" object-bottom fixed bg-black rounded-full flex justify-center items-center aspect-square h-[50px] shadow-lg bottom-20 right-2 z-10 group duration-300 ease-out hover:bg-cBlue">
        <span class="material-symbols-outlined scale-110 duration-300 ease-out group-hover:text-white text-white mb-100px">
            add
        </span>
    </a>
</div>
@include('component.navbar', ['active' => 'home'])
@endsection
