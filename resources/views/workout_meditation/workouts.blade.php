@extends('workout_meditation.workoutMeditationTemplate')

@section('titleActive', 'Workout')
@section('isWorkoutActive', 'activeCategory')
@section('description', "Let's Workout!")

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('content')
{{-- <div class="pb-28 w-full lg:-mt-16 justify-center lg:flex lg:flex-wrap lg:justify-start h-[100vh]"> --}}
    {{-- Cards Plan Container --}}
    {{-- <div class="p-2 w-full justify-center content-center h-[100vh]"> --}}
        <?php $unenroll_plans = array() ?>
        @if ($enrollments->toArray())
        <h3 class="flex justify-center text-cBlue mt-4 lg:mt-0">Enrolled Plan</h3>
        @endif

        <div class="lg:w-full lg:flex lg:flex-wrap lg:justify-start lg:gap-2 max-h-[100vh]">
            @forelse ($workouts as $workout)
                @if (in_array(strval($workout->id), $enrollments->toArray()))
                    <form action="/workoutdetails" method="POST"  class="enrolled_form lg:w-[48%]">
                        @csrf
                        <input type="hidden" name="workout_id" value="{{ $workout->id }}">
                        {{-- Card Plan --}}
                        <div class="enrolled_element hover:cursor-pointer lg:h-[150px] lg:w-full mx-2 px-3 py-6 flex bg-white rounded-3xl relative mb-4 shadow-lg lg:items-center md:max-w-full hover:bg-blue-200 duration-500 focus:ring-cBlue">
                            {{-- Section Kiri --}}
                            <div class="w-[70%]">
                                <h2 class="text-xl">{{ $workout->name }}</h2>
                                <p class="text-sm"> @excerpt($workout->description)</p>
                                <p class="text-sm flex items-center">
                                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                        toll
                                    </span>
                                    {{ $workout->points . ' points will be added!' }}
                                </p>
                                {{-- <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span> --}}
                            </div>
                            {{-- Section Kanan --}}
                            <div class="w-[30%] h-full flex justify-center items-center">
                                {{-- Image --}}
                                <div class="w-[90%] lg:w-[70%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('{{ '/storage/' . $workout->image }}')">
                                </div>
                            </div>
                        </div>
                    </form>
                @else
                    <?php $unenroll_plans[] = $workout ?>
                @endif
            @empty
                <h3 class="flex justify-center text-cBlue">Wait for Upcoming Plans</h3>
            @endforelse
        </div>

        <?php $idx = 0;?>
        @if ($enrollments->toArray() and $unenroll_plans)
            <h3 class="flex justify-center mt-4 text-cBlue">Not Enrolled Plan</h3>
        @endif

        @if ( $unenroll_plans )
            <div class="lg:w-full lg:flex lg:flex-wrap lg:justify-start lg:gap-2 max-h-[100vh] lg:overflow-auto">
                @foreach ($unenroll_plans as $plan)
                    <form action="/workoutdetails" method="POST"  class="unenrolled_form lg:w-[48%]">
                        @csrf
                        <input type="hidden" name="workout_id" value="{{ $plan->id }}">
                        <input type="hidden" name="new_plan" value="1">
                        {{-- Card Plan --}}
                        <div class="mx-2 lg:h-[150px] hover:cursor-pointer lg:w-full px-3 py-6 flex bg-white rounded-3xl relative mb-4 shadow-lg md:max-w-full lg:items-center hover:bg-blue-200 duration-500 focus:ring-cBlue" data-modal-target="popup-modal{{ $loop->iteration }}" data-modal-toggle="popup-modal{{ $loop->iteration }}">
                            {{-- Section Kiri --}}
                            <div class="w-[70%]">
                                <h2 class="text-xl">{{ $plan->name }}</h2>
                                <p class="text-sm"> @excerpt($plan->description)</p>
                                <p class="text-sm flex items-center">
                                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                        toll
                                    </span>
                                    {{ $plan->points . ' points will be added!' }}
                                </p>
                                {{-- <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span> --}}
                            </div>
                            {{-- Section Kanan --}}
                            <div class="w-[30%] h-full flex justify-center items-center">
                                {{-- Image --}}
                                <div class="w-[90%] lg:w-[70%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('{{ '/storage/'. $plan->image }}')">
                                </div>
                            </div>
                        </div>
                    </form>

                    {{-- Pop up --}}
                    <div id="popup-modal{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 lg:z-50 lg:fixed hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal{{ $loop->iteration }}">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center z-50">
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to join this plan?</h3>
                                    <button data-modal-hide="popup-modal{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                    {{-- <a href="/workoutdetails"> --}}
                                    <button data-modal-hide="popup-modal" type="button" class="popup text-white bg-cBlue hover:bg-cBlue focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                    {{-- </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        {{-- Card Plan --}}
        {{-- <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl relative mb-4 shadow-lg" data-modal-target="popup-modal" data-modal-toggle="popup-modal">

            <div class="w-[70%]">
                <h2 class="text-xl">BURN FAT IN 7 DAYS!</h2>
                <p class="text-sm">Workout Program (Results in 1 week) include..</p>


                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                        toll
                    </span>
                    5 points will be added!
                </p>
                <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
            </div>

            <div class="w-[30%] h-full flex justify-center items-center">

                <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">

                </div>
            </div>
        </div> --}}

    </div>

@endsection

@section('script')

<script>
    var form1 = document.getElementsByClassName ("enrolled_form");
    var form2 = document.getElementsByClassName ("unenrolled_form");
    // console.log(document.getElementsByClassName("popup")[1])
    // console.log(document.getElementsByClassName("popup")[2])

    for(let i = 0; i < form1.length; i++){
        document.getElementsByClassName("enrolled_element")[i].addEventListener("click", function () {
            form1[i].submit();
        });
    }
    for(let i = 0; i < form2.length; i++){
        document.getElementsByClassName("popup")[i].addEventListener("click", function () {
            form2[i].submit();
        });
    }
</script>
@endsection
