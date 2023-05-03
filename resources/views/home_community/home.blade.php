@extends('master')

@section('title', 'Home')

@section('style')
    <style>
    </style>
@endsection

<nav class="justify-evenly fixed bg-cLightGrey w-full z-10">
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
            <a href="/profile" class="fixed bg-[#FF5768] rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-opacity-50">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a>
        </div>
        <p class="font-light text-cDarkGrey">Let's see your daily progress!</p>
    </div>
</nav>

@section('body')
<div class="w-full h-fit px-2 pb-2">
    <div class="max-w-screen-xl px-4 py-3 h-20"></div>
    <div class="text-center font-bold text-xl mt-5">Good Morning, ID {{ session('activeId') }}</div>
        {{-- @foreach ($arrUser as $usr)
        <h1>{{$usr}}</h1>
        @endforeach --}}
    <div class="max-w-screen-xl px-4 py-2"></div>

    {{-- User Progress --}}
    <div class="bg-white shadow-lg rounded-3xl h-[210px] my-3">
        <div class="whitespace-break-spaces flex flex-col text-xl font-bold gap-2 ml-5">
            Your Progress
        </div>
        <div class="flex flex-row text-3xl font-bold ml-20">
            {{-- Total KCal Calculation --}}
            XYZ.AB
            <div class="flex flex-col text-sm font-bold ml-2 text-center">
                TOTAL
                <div class="flex text-sm font-bold">
                    KCAL
                </div>
            </div>
            <div class="flex flex-col text-sm font-bold ml-20 text-center">
                BMI
                <div class="flex text-sm font-normal">
                    {{-- BMI Calculation --}}
                    XX.X
                </div>
            </div>
            <div class="flex flex-col text-sm font-bold ml-10 text-center">
                Index
                <div class="flex text-sm font-normal text-center text-[#3EBC85]">
                    {{-- IF ELSE-> Normal, Obese,  --}}
                    Normal
                </div>
            </div>
        </div>
        <div class="flex flex-row ml-20 mt-5">
            <div class="flex flex-col text-sm font-bold">
                XX.X KCAL
                <div class="flex text-sm font-normal">
                    Consumed
                </div>
            </div>
            <div class="flex flex-col text-sm font-bold ml-10">
                XX.X KCAL
                <div class="flex text-sm font-normal">
                    Burned
                </div>
            </div>
            <div class="flex flex-col text-sm font-normal ml-[60px] items-center">
                Current Streak
                <div class="flex-row text-sm font-bold">
                    <svg fill="#000000" height="20" width="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460 460" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>< id="SVGRepo_iconCarrier"> <> <path d="M73.742,360.816c2.138,0,4.293-0.683,6.115-2.094c4.367-3.381,5.166-9.662,1.785-14.029 C56.026,311.61,42.487,271.95,42.487,230c0-103.395,84.118-187.513,187.513-187.513c24.334,0,48.004,4.589,70.352,13.641 c5.118,2.073,10.948-0.396,13.022-5.515c2.073-5.119-0.396-10.949-5.515-13.022C283.115,27.568,256.92,22.487,230,22.487 c-114.423,0-207.513,93.09-207.513,207.513c0,46.423,14.987,90.317,43.341,126.937C67.798,359.483,70.753,360.816,73.742,360.816z"></path> <path d="M394.177,103.069c-3.382-4.368-9.662-5.167-14.029-1.786c-4.367,3.381-5.167,9.662-1.786,14.029 c25.612,33.082,39.15,72.74,39.15,114.688c0,103.395-84.118,187.513-187.513,187.513c-24.332,0-48-4.589-70.346-13.639 c-5.119-2.072-10.949,0.396-13.022,5.515c-2.073,5.119,0.396,10.949,5.515,13.022c24.743,10.021,50.937,15.102,77.854,15.102 c114.423,0,207.513-93.09,207.513-207.513C437.513,183.58,422.528,139.688,394.177,103.069z"></path> <path d="M358.098,226.912c-1.338-4.121-5.178-6.912-9.511-6.912h-72.754L422.58,15.837c2.865-3.986,2.413-9.461-1.066-12.924 c-3.479-3.462-8.956-3.888-12.929-1.004l-303.046,220c-3.507,2.545-4.975,7.06-3.637,11.181c1.338,4.121,5.178,6.912,9.511,6.912 h72.754L37.42,444.164c-2.865,3.986-2.413,9.461,1.066,12.924c1.935,1.926,4.488,2.912,7.057,2.912c2.05,0,4.109-0.628,5.872-1.908 l303.046-220C357.968,235.547,359.436,231.033,358.098,226.912z M89.868,405.463L211.79,235.837 c2.189-3.046,2.49-7.061,0.778-10.399c-1.711-3.338-5.147-5.438-8.898-5.438h-61.46L370.132,54.537L248.21,224.164 c-2.189,3.046-2.49,7.061-0.778,10.399c1.711,3.338,5.147,5.438,8.898,5.438h61.46L89.868,405.463z"></path></svg>
                    {{-- Streak Counter --}}
                    {{-- ... --}}
                </div>
            </div>
        </div>
    </div>

    {{-- Main Features --}}
        <div class="w-80% h-60 flex mt-5 justify-between mb-2">
            {{-- Workout --}}
            <a href="/workoutmeditations" class="w-[48%]">
                <div class="items-stretch h-full flex flex-col bg-[#428FDE] rounded-3xl overflow-hidden transition ease-in-out delay-1o0 hover:scale-105 duration-500">
                    <figure class="max-w-lg items-center content-center justify-between">
                        <img class="mt-2 m-auto h-auto max-w-full rounded-lg md:h-40 md:ml-40" src="/assets/blue.png" alt="image description">
                        <figcaption class="text-sm font-bold text-center text-white dark:text-gray-400">Workout</figcaption>
                    </figure>
                </div>
            </a>
            {{-- Diet --}}
            <a href="/diet" class="w-[48%]">
                <div class="mr-2 ml-2 items-stretch h-full flex flex-col bg-[#3EBC85] rounded-3xl overflow-hidden transition ease-in-out delay-1o0 hover:scale-105 duration-500">
                    <figure class="max-w-lg items-center">
                        <img class="mt-5 m-auto h-auto max-w-full rounded-lg md:h-40 md:ml-40" src="/assets/green.png" alt="image description">
                        <figcaption class="mt-1 text-sm font-bold text-center text-white dark:text-gray-400 md:-mt-1">Diet</figcaption>
                    </figure>
                </div>
            </a>
            {{-- Challenge --}}
            <a href="/challenges" class="w-[48%]">
                <div class="items-stretch h-full flex flex-col bg-[#FF7F62] rounded-3xl overflow-hidden transition ease-in-out delay-1o0 hover:scale-105 duration-500">
                    <figure class="max-w-lg items-center">
                        <img class="mt-2 h-auto max-w-full rounded-lg md:h-40 md:ml-40 md:mt-3" src="/assets/orange.png" alt="image description">
                        <figcaption class="mb-2 text-sm font-bold text-center text-white dark:text-gray-400">Challenge</figcaption>
                    </figure>
                </div>
            </a>
        </div>
    {{-- </div> --}}

    {{-- On Going Plan --}}
    <ul role="contentinfo" class="py-3">
        <a href="#" class="flex flex-col items-center bg-white rounded-3xl h-100 shadow-lg md:flex-row hover:bg-cRed hover:bg-opacity-25 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 duration-500">
            <img class="object-cover rounded-t-lg h-40 m-5 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/assets/eyediet.jpeg" alt="">
            <div class="flex flex-col justify-between leading-normal">
                <p class="mb-2 font-normal text-[#FF5768] dark:text-gray-400 hover:text-white">Continue your plan.</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:text-white">30 Days Diet Plan for a Healthy Eyes</h5>
                <div class="w-full mb-5 bg-gray-200 rounded-full dark:bg-gray-700">
                    <div class="bg-[#FF5768] text-xs font-medium text-pink-100 text-center leading-none rounded-full" style="width: 45%"> 45%</div>
                </div>
            </div>
        </a>
    </ul>

    {{-- Progress Charts --}}
    <ul role="contentinfo" class="py-3">
        <div class="text-center font-bold text-xl m-5">Progress Charts</div>
        <!-- component -->
        {{-- Graph Body Weight --}}
        <div class="shadow-lg rounded-lg overflow-hidden">
            <div class="py-3 px-5 bg-gray-50">Body Weight Statistic</div>
            <canvas class="p-10" id="bodyWeightGraph"></canvas>
        </div>

        {{-- Graph Calorie Intake --}}
        <div class="shadow-lg rounded-lg overflow-hidden mt-3">
            <div class="py-3 px-5 bg-gray-50">Calorie Intake Statistic</div>
            <canvas class="p-10" id="calorieIntakeGraph"></canvas>
        </div>

        {{-- Graph Calorie Left --}}
        <div class="shadow-lg rounded-lg overflow-hidden mt-3">
            <div class="py-3 px-5 bg-gray-50">Calorie Left Statistic</div>
            <canvas class="p-10" id="calorieLeftGraph"></canvas>
        </div>

        <!-- Required chart.js -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- Chart line -->
        <script>
            // {{-- Graph Body Weight --}}
            const labels = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            const data = {
            labels: labels,
            datasets: [
                {
                label: "My Weight in kg",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [60, 60, 58, 59, 57, 58, 57],
                },
            ],
            };

            const configLineChart1 = {
            type: "line",
            data,
            options: {},
            };

            var bodyWeightGraph = new Chart(
            document.getElementById("bodyWeightGraph"),
            configLineChart1
            );

            // {{-- Calorie Intake --}}
            const labels_calIn = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            const data_calIn = {
            labels: labels,
            datasets: [
                {
                label: "Calorie Intake in kCal",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [60, 80, 58, 59, 57, 58, 57],
                },
            ],
            };

            const configLineChart2 = {
            type: "line",
            data,
            options: {},
            };

            var calorieIntakeGraph = new Chart(
            document.getElementById("calorieIntakeGraph"),
            configLineChart2
            );

            // {{-- Calorie Left --}}
            const labels_calOut = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            const data_calOut = {
            labels: labels,
            datasets: [
                {
                label: "Calorie Left in kCal",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [60, 60, 58, 59, 57, 58, 57],
                },
            ],
            };

            const configLineChart3 = {
            type: "line",
            data,
            options: {},
            };

            var calorieLeftGraph = new Chart(
            document.getElementById("calorieLeftGraph"),
            configLineChart3
            );
        </script>
    </ul>

    {{-- Leaderboard --}}
    <ul role="list" class="divide-y divide-gray-100 py-3">
        <div class="text-center font-bold text-xl m-5">Leaderboard</div>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-pink-200 duration-500">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/female.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Winita Teukeku Priyanto</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-pink-200 duration-500">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/male.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Daniel Zerge Wijaya</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-pink-200 duration-500">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/female.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Chrystalia Glenys Winata Ang</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-pink-200 duration-500">
            <div class="flex gap-x-4">
                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/male.png" alt="">
                <div class="min-w-0 flex-auto py-2">
                    <p class="text-sm font-semibold leading-6 text-gray-900">Jefferson Johan</p>
                </div>
            </div>
            <p class="text-sm leading-6 text-gray-900">ⓒ 150,850</p>
        </li>
        <li class="flex justify-between items-center gap-x-6 m-2 p-5 bg-white rounded-3xl shadow-lg hover:bg-pink-200 duration-500">
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
    <a href="/inputweight" class=" object-bottom fixed bg-black rounded-full flex justify-center items-center aspect-square h-[50px] shadow-lg bottom-20 right-2 z-10 group duration-300 ease-out hover:bg-cRed">
        <span class="material-symbols-outlined scale-110 duration-300 ease-out group-hover:text-white text-white mb-100px">
            add
        </span>
    </a>
</div>
@include('component.navbar', ['active' => 'home'])
@endsection

{{-- <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p> --}}
