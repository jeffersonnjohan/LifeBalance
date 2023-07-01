@extends('master')

@section('title', 'Plan Diet')

@section('style')

@endsection

@section('body')
    <?php
        $i = 1;
        $flag = 0;
        $total_kcal = 0;
        $updated_at = \Carbon\Carbon::parse($enrollment[0]->updated_at)->format('d/M/Y');
        $today = \Carbon\Carbon::now('GMT+7')->format('d/M/Y');
        $tomorrow = \Carbon\Carbon::tomorrow('GMT+7')
    ?>

  <x-back-get hover-bg="bg-cGreen" backlink="/diets"/>
    <div class="lg:bg-cLightGrey ">
        <div class="lg:fixed lg:right-0 lg:left-0 lg:w-full lg:h-[70px] lg:bg-cLightGrey lg:z-10 ">
            <div class="h-[70px] flex justify-center items-center text-2xl font-medium ">
                <p>{{ $diet_days[0]->diet->name }}</p>
            </div>
        </div>
        <div class="w-screen h-fit flex lg:mt-[70px] ">
            {{-- <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
                <p>{{ $diet_days[0]->diet->name }}</p>
            </div> --}}
            <div class="lg:flex lg:flex-row w-full ">
                <div class="lg:w-[25%] lg:h-screen lg:fixed ">
                    {{-- <div class=" h-60 lg:h-fit w-full bg-cover" style="background-image: url({{ '/storage/'.$diet_days[0]->diet->image }})"></div> --}}
                    <div class=" h-60 lg:h-full w-full bg-cover" style="background-image: url('{{ '/storage/'.$diet_days[0]->diet->image }}')"></div>
                    <div class="bg-cGreen lg:bottom-0 lg:fixed lg:w-[25%]">
                        <p class="p-2 text-lg font-normal text-center text-white ">
                            {{ $diet_days[0]->diet->description }}
                        </p>
                    </div>
                </div>
                <div class="lg:w-[75%] lg:grid-cols-2 lg:grid lg:ml-[25%]">
                    @foreach ($diet_days as $day)
                        {{-- if user already finished the plan before --}}
                        @if ($enrollment[0]->finished_day >= $i)
                        <div class="mb-3 mr-3 ml-3 p-2 m-3 border-2 border-cGreen rounded-3xl shadow-md relative z-0">
                            <div>
                                <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i . ' :'}}</h1>
                                <h2 class="text-center text-cGreen font-bold text-md">{{ $day->calories . ' Kcal Consumed'}} </h2>
                                <p class="text-lg font-normal text-black p-2">
                                    {{ $day->description }}
                                </p>
                                {{-- Done --}}
                                <div class="flex items-center justify-end">
                                    <button type="submit" class="w-40 h-fit py-2 px-5  rounded-full bg-cGreen text-white border-2 hover:bg-white hover:border-cGreen hover:text-cGreen duration-300 ease-out cursor-pointer text-center text-2xl">
                                        DONE
                                    </button>
                                </div>
                            </div>
                            {{-- overlay --}}
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-cDarkGrey z-10 opacity-70 rounded-3xl"></div>
                            <div class="absolute inset-0 flex flex-col justify-center items-center z-20">
                                <p class="text-2xl font-bold text-white">{{'DAY ' . $i++}}</p>
                                <p class="text-2xl font-bold text-white">Finished</p>
                            </div>
                        </div>
                        {{-- unlocked ongoing plan or if it's user first day--}}
                        @elseif ($flag == 0 and $enrollment[0]->finished_day == 0)
                        @php
                            $total_kcal = $day->calories;
                        @endphp
                        <div class="m-3 lg:mb-3 lg:mr-3 lg:ml-3 lg:mt-0 p-2 border-2 border-cGreen rounded-3xl shadow-md">
                            <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                            <h2 class="text-center text-cGreen font-bold text-md">{{ $total_kcal . ' Kcal Consumed'}} </h2>
                            <p class="text-lg font-normal text-black p-2">
                                {{ $day->description }}
                            </p>
                            {{-- Done --}}
                            <div id="done" class="flex items-center justify-end">
                                <button type="submit" class="w-40 h-fit py-2 px-5  rounded-full bg-cGreen text-white border-2 hover:bg-white hover:border-cGreen hover:text-cGreen duration-300 ease-out cursor-pointer text-center text-2xl">
                                    DONE
                                </button>
                            </div>
                        </div>
                        <?php $flag = 1;?>
                        {{-- locked ongoing plan --}}
                        @elseif ($flag == 0 and $today == $updated_at)
                        <div class="m-3 lg:mb-3 lg:mr-3 lg:ml-3 p-2 border-2 border-cGreen rounded-3xl shadow-md">
                            <h1 class=" text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                            {{-- Done --}}
                            <div class="flex items-center justify-center">
                                <label for="default-checkbox" class="mr-4 text-xl font-bold text-cGreen">
                                    Unlocked in
                                    <span id="countDown"></span>
                                </label>
                            </div>
                        </div>
                        <?php $flag = 1 ?>
                        {{--  unlocked plan --}}
                        @elseif (!$flag)
                        @php
                            $total_kcal = $day->calories;
                        @endphp
                        <div class="m-3 lg:mb-3 lg:mr-3 lg:ml-3 lg:mt-0 p-2 border-2 border-cGreen rounded-3xl shadow-md">
                            <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                            <h2 class="text-center text-cGreen font-bold text-md">{{ $total_kcal . ' Kcal Consumed'}} </h2>
                            <p class="text-lg font-normal text-black p-2">
                                {{ $day->description }}
                            </p>
                            {{-- Done --}}
                            <div id="done" class="flex items-center justify-end">
                                <button type="submit" class="w-40 h-fit py-2 px-5  rounded-full bg-cGreen text-white border-2 hover:bg-white hover:border-cGreen hover:text-cGreen duration-300 ease-out cursor-pointer text-center text-2xl">
                                    DONE
                                </button>
                            </div>
                        </div>
                        <?php $flag = 1;?>
                        {{-- locked plan --}}
                        @else
                        <div class="m-3 lg:mb-3 lg:mr-3 lg:ml-3 p-2 border-2 border-cGreen rounded-3xl shadow-md relative z-0">
                            <div>
                                <h1 class="text-center text-cGreen font-bold text-2xl">{{'DAY ' . $i++ . ' :'}}</h1>
                            </div>
                            {{-- overlay --}}
                            <div class="absolute inset-0 flex flex-col justify-center items-center bg-cDarkGrey z-10 opacity-70 rounded-3xl"></div>
                            <div class="absolute inset-0 flex flex-col justify-center items-center z-20">
                                <p class="material-symbols-outlined">
                                    lock
                                </p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <form action="/backtodiets" method="POST" id='done_form'>
                @csrf
                {{-- <input type="hidden" id="diet_value" name="diet_value"> --}}
                <input type="hidden" name="diet_id" value="{{ $diet_id }}">
                <input type="hidden" name="total_kcal" value="{{ $total_kcal }}">
            </form>

            {{-- <div class="m-3 border-2 border-cGreen rounded-3xl shadow-md">
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
            <div class="m-3 border-2 border-cGreen rounded-3xl shadow-md bg-cDarkGrey">
                <h1 class="text-center text-cGreen font-bold text-2xl">DAY 2 :</h1>
                <div class="grid place-items-center">
                    <span class="material-symbols-outlined -mt-8">
                        lock
                    </span>
                </div>
            </div> --}}
            @include('backend.countdown-js')
        </div>
    </div>
    <script>
        // var checkbox = document.getElementsByClassName('diet_checkbox')[0];
        // $("#back").click(function(){
        //     if(checkbox.checked ){
        //         $("#diet_value").val(1);
        //     } else {
        //         $("#diet_value").val(0);
        //     }
        // })

        var form = document.getElementById ("done_form");
        var done = document.getElementById ("done");
        if(done){
            done.addEventListener("click", function () {
                form.submit();
            });
        }
    </script>
@endsection
