@extends('master')

@section('title', 'Home')

@section('style')
    <style>
        /* * {
            border: solid red;
        } */
    </style>
@endsection

@section('body')
<nav class="justify-evenly fixed bg-gradient-to-b from-cLightGrey from-70% to-transparent w-full z-10 -top-3">
    <div class="px-4 py-3 mx-auto w-full">
        <div class="flex items-center justify-between">
            <div class="flex-col">
                <ul class="flex font-normal space-x-2 text-2xl">
                    <li>
                        <a href="/home" class="text-cRed font-bold dark:text-white hover:text-cRed">Home</a>
                    </li>
                    <li class="text-cDarkGrey">
                        |
                    </li>
                    <li>
                        <a href="/community" class="text-cDarkGrey dark:text-white hover:text-cRed" aria-current="page">Community</a>
                    </li>
                </ul>
                <p class="font-light text-sm text-cDarkGrey">Let's see your daily progress!</p>
            </div>
            <div class="flex w-fit gap-5">
                @can('admin')
                <a href="/admin/workout" class="-mr-4 w-16 lg:w-auto -mt-3 text-xs lg:text-lg bg-cRed hover:bg-white duration-300 ease-out p-3 hover:ring-2 text-white hover:text-cRed rounded-b-3xl text-center ring-cRed">
                    <div class="pt-3">Go to Admin</div>
                </a>
                @endcan
                <a href="/profile" class="bg-cRed rounded-b-3xl flex justify-center items-center aspect-square h-fit p-2 shadow-lg z-10 group duration-300 ease-out hover:bg-white hover:ring-cRed hover:ring-2">
                    <div class="bg-white rounded-full p-4 bg-cover mt-2" style="background-image: url({{ '/storage/'. App\Models\User::find(Auth::user()->id)['image'] }})"></div>
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="w-full h-fit lg:px-3 px-2 pb-2">
    <div class="max-w-screen-xl px-4 py-3 h-20"></div>
    <div class="text-center font-bold text-xl md:text-3xl lg:text-3xl">Good Morning, {{$name}}!</div>
    <div class="max-w-screen-xl px-4 py-2"></div>

    <div class="lg:flex md:flex lg:gap-2 md:gap-2 lg:h-[88%] lg:w-full lg:fixed md:h-[90%] md:w-full md:fixed">

        <div class="lg:w-[30%]">
            <div class="w-full h-fit font-bold text-4xl mb-2">
                Your Progress
            </div>
            <div class="w-full h-fit lg:h-[65vh] lg:gap-3 grid grid-cols-3 gap-1 text-sm lg:grid-cols-2">
                <div class="py-2 px-3 bg-white rounded-md lg:rounded-2xl shadow-lg flex flex-col justify-center">
                    <div class="font-medium lg:text-xl">Total</div>
                    <div class="flex items-baseline gap-1 text-cRed">
                        <div class="text-4xl font-black text-cRed lg:text-5xl">{{ $totalCalories }}</div>
                        <div class="lg:text-xl">KCAL</div>
                    </div>
                </div>
                <div class="py-2 px-3 bg-white rounded-md lg:rounded-2xl shadow-lg flex flex-col justify-center">
                    <div class="font-medium lg:text-xl">Consumed</div>
                    <div class="flex items-baseline gap-1 text-cGreen">
                        <div class="text-4xl font-black lg:text-5xl">{{ $caloriesIn }}</div>
                        <div class="lg:text-xl">KCAL</div>
                    </div>
                </div>
                <div class="py-2 px-3 bg-white rounded-md lg:rounded-2xl shadow-lg flex flex-col justify-center">
                    <div class="font-medium lg:text-xl">Burned</div>
                    <div class="flex items-baseline gap-1 text-cBlue">
                        <div class="text-4xl font-black lg:text-5xl">{{ $caloriesOut }}</div>
                        <div class="lg:text-xl">KCAL</div>
                    </div>
                </div>
                <?php $color = 'cRed' ?>
                @if($categoryBmi == 'Normal')
                    <?php $color = 'cGreen' ?>
                @endif
                <div class="py-2 px-3 bg-white rounded-md lg:rounded-2xl shadow-lg flex flex-col justify-center">
                    <div class="font-medium lg:text-xl">BMI</div>
                    <div class="flex items-baseline gap-1">
                        <div class="text-4xl font-black text-{{ $color }} lg:text-5xl">{{ $bmi }}</div>
                    </div>
                </div>
                <div class="py-2 px-3 bg-white rounded-md lg:rounded-2xl shadow-lg flex flex-col justify-center">
                    <div class="font-medium lg:text-xl">Index</div>
                    <div class="flex items-baseline gap-1">
                        <div class="text-[18px] font-black text-{{ $color }} lg:text-2xl">{{ $categoryBmi }}</div>
                    </div>
                </div>
                <div class="py-2 px-3 bg-white rounded-md lg:rounded-2xl shadow-lg flex flex-col justify-center">
                    <div class="font-medium lg:text-xl">Current Streak</div>
                    <div class="flex items-baseline gap-1 text-cOrange">
                        <div class="text-4xl font-black lg:text-5xl">{{ $streak }}</div>
                        <svg fill="#FF7F62" height="25" width="25" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 460 460" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>< id="SVGRepo_iconCarrier"> <> <path d="M73.742,360.816c2.138,0,4.293-0.683,6.115-2.094c4.367-3.381,5.166-9.662,1.785-14.029 C56.026,311.61,42.487,271.95,42.487,230c0-103.395,84.118-187.513,187.513-187.513c24.334,0,48.004,4.589,70.352,13.641 c5.118,2.073,10.948-0.396,13.022-5.515c2.073-5.119-0.396-10.949-5.515-13.022C283.115,27.568,256.92,22.487,230,22.487 c-114.423,0-207.513,93.09-207.513,207.513c0,46.423,14.987,90.317,43.341,126.937C67.798,359.483,70.753,360.816,73.742,360.816z"></path> <path d="M394.177,103.069c-3.382-4.368-9.662-5.167-14.029-1.786c-4.367,3.381-5.167,9.662-1.786,14.029 c25.612,33.082,39.15,72.74,39.15,114.688c0,103.395-84.118,187.513-187.513,187.513c-24.332,0-48-4.589-70.346-13.639 c-5.119-2.072-10.949,0.396-13.022,5.515c-2.073,5.119,0.396,10.949,5.515,13.022c24.743,10.021,50.937,15.102,77.854,15.102 c114.423,0,207.513-93.09,207.513-207.513C437.513,183.58,422.528,139.688,394.177,103.069z"></path> <path d="M358.098,226.912c-1.338-4.121-5.178-6.912-9.511-6.912h-72.754L422.58,15.837c2.865-3.986,2.413-9.461-1.066-12.924 c-3.479-3.462-8.956-3.888-12.929-1.004l-303.046,220c-3.507,2.545-4.975,7.06-3.637,11.181c1.338,4.121,5.178,6.912,9.511,6.912 h72.754L37.42,444.164c-2.865,3.986-2.413,9.461,1.066,12.924c1.935,1.926,4.488,2.912,7.057,2.912c2.05,0,4.109-0.628,5.872-1.908 l303.046-220C357.968,235.547,359.436,231.033,358.098,226.912z M89.868,405.463L211.79,235.837 c2.189-3.046,2.49-7.061,0.778-10.399c-1.711-3.338-5.147-5.438-8.898-5.438h-61.46L370.132,54.537L248.21,224.164 c-2.189,3.046-2.49,7.061-0.778,10.399c1.711,3.338,5.147,5.438,8.898,5.438h61.46L89.868,405.463z"></path></svg>
                    </div>
                </div>
            </div>
        </div>


        <div class="lg:w-[70%] lg:p-2 h-[80vh] lg:overflow-scroll lg:items-center lg:justify-center lg:mx-3 md:overflow-scroll md:items-center md:justify-center md:mx-3">
            {{-- Main Features --}}
            <div class="flex mt-4 justify-between gap-x-2 lg:gap-5 items-center lg:mt-0 lg:mx-8 lg:my-5 md:gap-5 md:mt-0 md:mx-8 md:my-5 h-fit">
                {{-- Workout --}}
                <a href="/workouts" class="w-[50%]">
                    <div class="h-[180px] lg:h-[300px] md:h-[300px] flex flex-col items-center justify-center content-center shadow-lg bg-cBlue rounded-3xl overflow-hidden transition ease-in-out delay-100 scale-95 hover:scale-100 duration-500">
                        <img class="h-40 w-40 rounded-lg" src="/assets/blue.png" alt="image description">
                        <figcaption class="text-sm mb-5 font-bold text-center text-white dark:text-gray-400">Workout</figcaption>
                    </div>
                </a>
                {{-- Diet --}}
                <a href="/diets" class="w-[50%]">
                    <div class="h-[180px] lg:h-[300px] md:h-[300px] flex flex-col items-center justify-center content-center shadow-lg bg-cGreen rounded-3xl overflow-hidden transition ease-in-out delay-100 scale-95 hover:scale-100 duration-500">
                        <img class="ml-2 h-40 w-40 rounded-lg" src="/assets/green.png" alt="image description">
                        <figcaption class="text-sm mb-5 font-bold text-center text-white dark:text-gray-400">Diet</figcaption>
                    </div>
                </a>
                {{-- Challenge --}}
                <a href="/challenges" class="w-[50%]">
                    <div class="h-[180px] lg:h-[300px] md:h-[300px] flex flex-col items-center justify-center content-center shadow-lg bg-cOrange rounded-3xl overflow-hidden transition ease-in-out delay-100 scale-95 hover:scale-100 duration-500">
                        <img class="h-40 w-40 rounded-lg" src="/assets/orange.png" alt="image description">
                        <figcaption class="text-sm mb-5 font-bold text-center text-white dark:text-gray-400">Challenge</figcaption>
                    </div>
                </a>
            </div>

            {{-- On Going Plan --}}
            @foreach($unfinishedWorkoutPlans as $unfinishedWorkoutPlan)
            <ul role="contentinfo" class="py-3">
                <a href="#" class="flex items-center h-fit p-5 bg-white rounded-3xl shadow-lg hover:bg-pink-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 duration-500">
                    <img class="object-cover w-[100px] h-[100px]" src="{{ '/storage/'.$unfinishedWorkoutPlan->workout->image }}" alt="">
                    <div class="flex flex-col justify-between p-3 gap-1">
                        <p class="font-normal text-sm text-cRed dark:text-gray-400 hover:text-white">Continue your plan.</p>
                        <p class="text-sm font-bold tracking-tight text-black dark:text-white hover:text-white">{{ $unfinishedWorkoutPlan->workout->name }}</p>
                        <div class="w-full bg-gray-200 rounded-full p-1 dark:bg-cDarkGrey">
                            <div class="bg-cRed text-xs text-transparent text-white text-center rounded-full leading-none" style="width:{{ $unfinishedWorkoutPlan->workout->day_count!=0? round($unfinishedWorkoutPlan->finished_day/$unfinishedWorkoutPlan->workout->day_count*100, 2) : 0}}%">{{ $unfinishedWorkoutPlan->workout->day_count!=0? round($unfinishedWorkoutPlan->finished_day/$unfinishedWorkoutPlan->workout->day_count*100, 2) : 0}}%</div>
                        </div>
                    </div>
                </a>
            </ul>
            @endforeach
            @foreach($unfinishedDietPlans as $unfinishedDietPlan)
            <ul role="contentinfo" class="py-3">
                <a href="#" class="flex items-center h-fit p-5 bg-white rounded-3xl shadow-lg hover:bg-pink-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 duration-500">
                    <img class="object-cover w-[100px] h-[100px]" src="{{ '/storage/'.$unfinishedDietPlan->diet->image }}" alt="">
                    <div class="flex flex-col justify-between p-3 gap-1">
                        <p class="font-normal text-sm text-cRed dark:text-gray-400 hover:text-white">Continue your plan.</p>
                        <p class="text-sm font-bold tracking-tight text-black dark:text-white hover:text-white">{{ $unfinishedDietPlan->diet->name }}</p>
                        <div class="w-full bg-gray-200 rounded-full p-1 dark:bg-cDarkGrey">
                            <div class="bg-cRed text-xs text-transparent text-white text-center rounded-full leading-none" style="width:{{ $unfinishedDietPlan->diet->day_count!=0? round($unfinishedDietPlan->finished_day/$unfinishedDietPlan->diet->day_count*100, 2) : 0}}%">{{ $unfinishedDietPlan->diet->day_count!=0? round($unfinishedDietPlan->finished_day/$unfinishedDietPlan->diet->day_count*100, 2) : 0}}%</div>
                        </div>
                    </div>
                </a>
            </ul>
            @endforeach

            <div class="lg:flex lg:justify-center lg:w-full lg:overscroll-none md:flex md:justify-center md:w-full">
                {{-- Progress Charts --}}
                <ul role="contentinfo" class="my-5 lg:w-[50%] md:w-[50%]">
                    <!-- component -->
                    {{-- Graph Body Weight --}}
                    <div class="shadow-lg rounded-lg overflow-hidden">
                        <div class="py-3 px-5 text-sm font-semibold bg-gray-50">Body Weight Statistic</div>
                        <canvas class="p-10" id="bodyWeightGraph"></canvas>
                    </div>

                    {{-- Graph Calorie Intake --}}
                    <div class="shadow-lg rounded-lg overflow-hidden mt-3">
                        <div class="py-3 px-5 text-sm font-semibold bg-gray-50">Calorie Intake Statistic</div>
                        <canvas class="p-10" id="calorieIntakeGraph"></canvas>
                    </div>

                    {{-- Graph Calorie Left --}}
                    <div class="shadow-lg rounded-lg overflow-hidden mt-3">
                        <div class="py-3 px-5 text-sm font-semibold bg-gray-50">Calorie Left Statistic</div>
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
                            data: {{ $weightList }},
                            },
                        ],
                        };

                        const configLineChart1 = {
                            type: "line",
                            data,
                            options: {},
                        };

                        const bodyWeightGraph = new Chart(
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
                            data: {{ $caloriesInList }},
                            },
                        ],
                        };

                        const configLineChart2 = {
                        type: "line",
                        data: data_calIn,
                        options: {},
                        };

                        const calorieIntakeGraph = new Chart(
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
                            data: {{ $caloriesOutList }},
                            },
                        ],
                        };

                        const configLineChart3 = {
                        type: "line",
                        data: data_calOut,
                        options: {},
                        };

                        const calorieLeftGraph = new Chart(
                        document.getElementById("calorieLeftGraph"),
                        configLineChart3
                        );
                    </script>
                </ul>

                {{-- Leaderboard --}}
                <ul role="list" class="lg:justify-center lg:text-center lg:w-[50%] md:justify-center md:text-center md:w-[50%] p-2">
                    <div class="text-center font-bold mt-5">Leaderboard</div>
                    @foreach($leaderboards as $leaderboard)
                    <form action="/otherprofile" method="post">
                        @csrf
                        <input type="hidden" name="userid" id="submit" value="{{ $leaderboard->id }}">
                        <button type="submit" name="submit" id="submit" class="w-full flex justify-between items-center ml-0 lg:ml-2 my-2 p-3 bg-white rounded-3xl shadow-lg hover:bg-pink-200 duration-500 hover:cursor-pointer">
                            <div class="flex items-center gap-3 w-fit">
                                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ '/storage/'.$leaderboard->image }}" alt="">
                                <div class="w-fit flex-auto py-2">
                                    <p class="text-xs w-fit text-gray-900">{{ $leaderboard->username }}</p>
                                </div>
                            </div>
                            <p class="h-fit text-xs text-gray-900">ⓒ {{ $leaderboard->points }}</p>
                        </button>
                    </form>
                    @endforeach
                    {{-- <li class="flex justify-between items-center m-2 p-3 bg-white rounded-3xl shadow-lg hover:bg-pink-200 duration-500">
                        <div class="flex items-center gap-3 w-fit">
                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="/assets/male.png" alt="">
                            <div class="w-fit flex-auto py-2">
                                <p class="text-xs w-fit text-gray-900">Winita Teukeku Priyanto</p>
                            </div>
                        </div>
                        <p class="h-fit text-xs text-gray-900">ⓒ 150,850</p>
                    </li> --}}
                </ul>
            </div>
            {{-- Blank Space --}}
            <div class="lg:hidden h-[120px] bg-transparent"></div>
        </div>
    </div>


    {{-- + button popup input weight--}}
    <a  class="object-bottom fixed rounded-full flex justify-center items-center aspect-square h-[50px] shadow-lg bottom-20 right-2 lg:bottom-5 lg:right-5 z-10 group duration-300 ease-out bg-cRed ring-cRed hover:bg-white hover:ring-2" data-modal-target='popup-inputweight' data-modal-toggle='popup-inputweight'>
        <span class="cursor-pointer material-symbols-outlined scale-110 duration-300 ease-out text-white mb-100px group-hover:text-cRed">
            add
        </span>
    </a>



    {{-- Pop Up Input Weight --}}
    <div id="popup-inputweight" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="fixed bg-white h-[60%] w-[90%] lg:w-[50%] left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] justify-center flex gap-3 flex-col p-3 rounded-3xl z-10">
            <div class="w-full h-[60%] flex gap-3">
                <div class="h-full w-[60%] flex flex-col gap-3">
                    <div class="bg-cGreen w-full h-[60%] rounded-3xl"></div>
                    <div class="bg-cRed w-full h-[40%] rounded-3xl"></div>
                </div>
                <div class="bg-cOrange w-[40%] rounded-3xl"></div>
            </div>
            <div class="w-full h-[40%] flex gap-3">
                <div class="bg-cGreen h-full w-[40%] rounded-3xl"></div>
                <div class="bg-cBlue h-full w-[60%] rounded-3xl"></div>
            </div>
            <div class="bg-cLightGrey w-[80%] lg:w-[60%] h-fit absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] rounded-3xl flex flex-col justify-center items-center text-center p-8 shadow-lg">
                <form action="/home" method="post">
                    @csrf
                    <div class="mb-5 flex flex-col text-center items-center">
                        <div class="text-2xl font-bold">Hey!</div>
                        <div class="text-sm text-center">Please input your current weight.</div>
                        <div class="w-[60%] border-2 h-7 my-5 p-8 flex justify-center content-center items-center rounded-3xl text-cBlue">
                            <span class="material-symbols-outlined scale-150">
                                weight
                            </span>
                            <input type="number" placeholder="Input Weight" name="weight" class="border-transparent p-5 bg-transparent focus:ring-0 focus:border-transparent text-sm">
                            <p class="font-bold text-lg">kg</p>
                        </div>

                        <input type="submit" value="Confirm" class="w-[200px] h-[50px] rounded-full bg-cBlue text-white hover:bg-white hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<x-plus-button link="" color="cRed" group-hover="group-hover:text-cRed"/>
<x-navbar active="home" admin="false"/>
@endsection
