@extends('workout_meditation.workoutMeditationTemplate')

@section('titleActive', 'Workout')
@section('isWorkoutActive', 'activeCategory')

@section('content')
    {{-- Cards Plan Container --}}
    <div class="pb-28">
        <?php $unenroll_plans = array() ?>
        <h3 class="flex justify-center text-white">Enrolled Plan</h3>
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
                            <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('{{ $workout->image . '.png' }}')">

                            </div>
                        </div>
                    </div>
                </form>
            @else
                <?php $unenroll_plans[] = $workout ?>
            @endif
        @endforeach

        <?php $idx = 0;?>
        @if ( $unenroll_plans )
            <h3 class="flex justify-center mt-10 text-cBlue">Not Enrolled Plan</h3>
            @foreach ($unenroll_plans as $plan)
                <form action="/workoutdetails" method="POST"  class="unenrolled_form">
                    @csrf
                    <input type="hidden" name="workout_id" value="{{ $plan->id }}">
                    {{-- Card Plan --}}
                    <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl relative mb-4 shadow-lg" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
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
                            <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('{{ $workout->image . '.png' }}')">

                            </div>
                        </div>
                    </div>
                </form>
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

    <script>
        var form1 = document.getElementsByClassName ("enrolled_form");
        var form2 = document.getElementsByClassName ("unenrolled_form");
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
