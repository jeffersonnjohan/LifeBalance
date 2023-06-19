@extends('workout_meditation.workoutMeditationTemplate')

@section('titleActive', 'Workout')
@section('isWorkoutActive', 'activeCategory')

@section('content')
    {{-- Cards Plan Container --}}
    <div class="pb-28">
        <?php $unenroll_plans = array() ?>
        @if ($enrollments->toArray())
        <h3 class="flex justify-center text-cBlue">Enrolled Plan</h3>
        @endif
        @foreach ($workouts as $workout)
        @if (in_array(strval($workout->id), $enrollments->toArray()))
                <form action="/workoutdetails" method="POST"  class="enrolled_form">
                    @csrf
                    <input type="hidden" name="workout_id" value="{{ $workout->id }}">
                    {{-- Card Plan --}}
                    <div class="enrolled_element max-w-sm px-3 py-6 flex bg-white rounded-3xl relative mb-4 shadow-lg">
                        {{-- Section Kiri --}}
                        <div class="w-[70%]">
                            <h2 class="text-xl">{{ $workout->name }}</h2>
                            <p class="text-sm"> @excerpt($workout->description)</p>


                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                {{ $workout->points . ' points will be added!' }}
                            </p>
                            <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
                        </div>
                        {{-- Section Kanan --}}
                        <div class="w-[30%] h-full flex justify-center items-center">
                            {{-- Image --}}
                            <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('{{ '/storage/' . $workout->image }}')">

                            </div>
                        </div>
                    </div>
                </form>
            @else
                <?php $unenroll_plans[] = $workout ?>
            @endif
        @endforeach

        <?php $idx = 0;?>
        @if ($enrollments->toArray())
        <h3 class="flex justify-center mt-10 text-cBlue">Not Enrolled Plan</h3>
        @endif
        @if ( $unenroll_plans )
            @foreach ($unenroll_plans as $plan)
                <form action="/workoutdetails" method="POST"  class="unenrolled_form">
                    @csrf
                    <input type="hidden" name="workout_id" value="{{ $plan->id }}">
                    <input type="hidden" name="new_plan" value="1">
                    {{-- Card Plan --}}
                    <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl relative mb-4 shadow-lg" data-modal-target="popup-modal{{ $loop->iteration }}" data-modal-toggle="popup-modal{{ $loop->iteration }}">
                        {{-- Section Kiri --}}
                        <div class="w-[70%]">
                            <h2 class="text-xl">{{ $plan->name }}</h2>
                            <p class="text-sm"> @excerpt($plan->description)</p>


                            <p class="text-sm text-cYellow flex items-center">
                                <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                                    toll
                                </span>
                                {{ $plan->points . ' points will be added!' }}
                            </p>
                            <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
                        </div>
                        {{-- Section Kanan --}}
                        <div class="w-[30%] h-full flex justify-center items-center">
                            {{-- Image --}}
                            <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('{{ '/storage/'. $workout->image }}')">

                            </div>
                        </div>
                    </div>
                </form>

                {{-- Pop up --}}
                <div id="popup-modal{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal{{ $loop->iteration }}">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">

                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to join this plan?</h3>
                                <button data-modal-hide="popup-modal{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                {{-- <a href="/workoutdetails"> --}}
                                <button data-modal-hide="popup-modal" type="button" class="popup text-white bg-cGreen hover:bg-cGreen focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Yes, I'm sure
                                </button>
                                {{-- </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

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
