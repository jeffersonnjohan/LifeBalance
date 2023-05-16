@extends('master')

@section('title', 'Plan Diet')

@section('style')

@endsection

@section('body')
    {{-- @extends('component.backbutton') --}}
    {{-- @section('backlink', '/backtodiets') --}}
    <div  id ='back' class="fixed bg-white rounded-full flex justify-center items-center aspect-square h-[50px] shadow-lg top-2 left-2 z-20 group duration-300 ease-out hover:bg-cBlue">
        <span class="material-symbols-outlined scale-110  duration-300 ease-out group-hover:text-white">
            arrow_back
        </span>
    </div>
    <form action="/backtodiets" method="POST" id='back_form'>
        @csrf
        <input type="hidden" id="diet_value" name="diet_value">
        <input type="hidden" name="diet_id" value="{{ $diet_id }}">
    </form>

    <?php
        $i = 1;
        $flag = 0;
        $updated_at = \Carbon\Carbon::parse($enrollment[0]->updated_at)->format('d/M/Y');
        $today = \Carbon\Carbon::now('GMT+8')->format('d/M/Y');
        $tomorrow = \Carbon\Carbon::tomorrow('GMT+8')
    ?>

    <div class="bg-cLightGrey w-full h-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p>{{ $diet_days[0]->diet->name }}</p>
        </div>
        <div class=" h-60 w-full bg-cover" style="background-image: url('assets/intermittentFasting.png')"></div>
        <div class="bg-cGreen -mt-2">
            <p class="p-2 text-lg font-normal text-center text-white">
                {{ $diet_days[0]->diet->description }}
            </p>
        </div>
        @foreach ($diet_days as $day)
            {{-- if user already finished the plan before --}}
            @if ($enrollment[0]->finished_day >= $i)
            <div class="m-3 border-2 border-cGreen rounded-lg shadow-md">
                <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                <h2 class="text-center text-cGreen font-bold text-md">{{ $day->calories . ' Kcal Consumed'}} </h2>
                <p class="text-lg font-normal text-black p-2">
                    {{ $day->description }}
                </p>
                {{-- Done --}}
                <div class="px-8 flex items-center justify-end mb-6">
                    <input id="default-checkbox" type="checkbox" class="w-7 h-7 text-cGreen bg-gray-100 border-cGreen rounded focus:ring-cGreen focus:ring-2" checked disabled>
                    <label for="default-checkbox" class="mr-4 text-3xl font-bold text-cGreen">DONE</label>
                </div>
            </div>
            {{-- unlocked ongoing plan or if it's user first day--}}
            @elseif ($flag == 0 and $enrollment[0]->finished_day == 0)
            <div class="m-3 border-2 border-cGreen rounded-lg shadow-md">
                <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                <h2 class="text-center text-cGreen font-bold text-md">{{ $day->calories . ' Kcal Consumed'}} </h2>
                <p class="text-lg font-normal text-black p-2">
                    {{ $day->description }}
                </p>
                {{-- Done --}}
                <div class="px-8 flex items-center justify-end mb-6">
                    <input id="default-checkbox" type="checkbox" class="diet_checkbox w-7 h-7 text-cGreen bg-gray-100 border-cGreen rounded focus:ring-cGreen focus:ring-2">
                    <label for="default-checkbox" class="mr-4 text-3xl font-bold text-cGreen">DONE</label>
                </div>
            </div>
            <?php $flag = 1;?>
            {{-- locked ongoing plan --}}
            @elseif ($flag == 0 and $today == $updated_at)
            <div class="m-3 border-2 border-cGreen rounded-lg shadow-md">
                <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                {{-- Done --}}
                <div class="px-8 flex items-center justify-end mb-6">
                    <label for="default-checkbox" class="mr-4 text-3xl font-bold text-cGreen">
                        Unlocked in
                        <span id="countDown"></span>
                    </label>
                </div>
            </div>
            <?php $flag = 1 ?>
            {{--  unlocked plan --}}
            @elseif (!$flag)
            <div class="m-3 border-2 border-cGreen rounded-lg shadow-md">
                <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                <h2 class="text-center text-cGreen font-bold text-md">{{ $day->calories . ' Kcal Consumed'}} </h2>
                <p class="text-lg font-normal text-black p-2">
                    {{ $day->description }}
                </p>
                {{-- Done --}}
                <div class="px-8 flex items-center justify-end mb-6">
                    <input id="default-checkbox" type="checkbox" class="diet_checkbox w-7 h-7 text-cGreen bg-gray-100 border-cGreen rounded focus:ring-cGreen focus:ring-2">
                    <label for="default-checkbox" class="mr-4 text-3xl font-bold text-cGreen">DONE</label>
                </div>
            </div>
            <?php $flag = 1;?>
            {{-- locked plan --}}
            @else
            <div class="m-3 border-2 border-cGreen rounded-lg shadow-md bg-cDarkGrey">
                <h1 class="text-center text-cGreen font-bold text-2xl">{{ 'DAY ' . $i++ . ' :'}}</h1>
                <div class="grid place-items-center">
                    <span class="material-symbols-outlined -mt-8">
                        lock
                    </span>
                </div>
            </div>
            @endif
        @endforeach


        {{-- <div class="m-3 border-2 border-cGreen rounded-lg shadow-md">
            <h1 class="text-center text-cGreen font-bold text-2xl">DAY 1 :</h1>
            <h2 class="text-center text-cGreen font-bold text-md">100 Kcal Consumed</h2>
            <p class="text-lg font-normal text-black p-2">
                Breakfast :
                <br>
                - Avocado Toast Egg
                <br>
                - Arugula
                <br>
                - Guacamole
                <br>
                <br>

                Lunch:
                <br>
                - Smoothie Yogurt
                <br>
                - Banana
                <br>
                - Spinach
                <br>
                - Ginger
                <br>
                <br>

                Snack:
                <br>
                - Apple with Peanut Butter
                <br>
                - Mixed nuts
                <br>
                - Raisins
                <br>
                <br>

                Dinner:
                <br>
                - Quinoa Bowl Vegetable Stir-Fry
                <br>
                - Protein
            </p>


            <div class="px-8 flex items-center justify-end mb-6">
                <label for="default-checkbox" class="mr-4 text-3xl font-bold text-cGreen">DONE</label>
                <input id="default-checkbox" type="checkbox" value="" class="w-7 h-7 text-cGreen bg-gray-100 border-cGreen rounded focus:ring-cGreen focus:ring-2">
            </div>
        </div>
        <div class="m-3 border-2 border-cGreen rounded-lg shadow-md bg-cDarkGrey">
            <h1 class="text-center text-cGreen font-bold text-2xl">DAY 2 :</h1>
            <div class="grid place-items-center">
                <span class="material-symbols-outlined -mt-8">
                    lock
                </span>
            </div> --}}
        </div>


        {{-- <div class="pb-16 flex flex-row place-content-end mr-4 ">
            <h3 class="text-cGreen font-bold text-xl">DONE</h3>
            <div class="border-cGreen border-4 w-5 h-5 self-center ml-2">
            </div>
        </div> --}}
        {{-- Done --}}
        {{-- <div class="px-8 flex items-center justify-end">
            <label for="default-checkbox" class="mr-4 text-3xl font-bold text-cGreen">DONE</label>
            <input id="default-checkbox" type="checkbox" value="" class="w-7 h-7 text-cGreen bg-gray-100 border-cGreen rounded focus:ring-cGreen focus:ring-2">
        </div> --}}
        @include('backend.countdown-js')
    </div>
    <script>
        var checkbox = document.getElementsByClassName('diet_checkbox')[0];
        $("#back").click(function(){
            if(checkbox.checked ){
                $("#diet_value").val(1);
            } else {
                $("#diet_value").val(0);
            }
        })

        var form = document.getElementById ("back_form");
        document.getElementById ("back").addEventListener("click", function () {
            form.submit();
        });
    </script>
@endsection
