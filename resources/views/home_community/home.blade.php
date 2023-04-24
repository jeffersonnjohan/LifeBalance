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
        <div class="p-5 flex flex-col text-xl font-bold gap-2 ml-5">
            Your Progress
        </div>
    </div>

    {{-- component.featuresbanner.blade.php --}}
    <div class="mt-3 items-stretch rounded-3xl h-60 bg-transparent mb-3">
        <div class="p-3 flex flex-col text-2xl font-bold ml-5 bg-black w-40 h-60">

            <div class="p-3 flex flex-col text-2xl font-bold gap-2 ml-5 bg-black w-40 h-60">
        </div>
        </div>
    </div>

    {{-- component.ongoingplan.blade.php --}}
    <ul role="contentinfo" class="py-3">
        <div class="bg-white shadow-lg rounded-3xl h-60">
            <div class="p-5 flex flex-col text-xl font-bold gap-2 ml-5">
                On Going Plan
            </div>
        </div>
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
@include('component.navbar')
@endsection
