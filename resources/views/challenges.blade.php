@extends('master')

@section('title', 'Challenge')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('body')
    <div class="bg-cLightGrey h-full w-full mb-28 lg:mb-4"">
        <div class="bg-cOrange h-fit rounded-b-[50px] lg:rounded-b-[100px] mb-2">
            <h1 class="text-white text-3xl font-n'id'ormal text-left pt-12 pb-12 pl-10 pr-10 lg:text-center">Ayo Ikuti Challenge
            <br> Dan Dapatkan Keuntungan Pointnya!</h1>
        </div>
        <div class="lg:flex lg:flex-wrap lg:p-4">
            @php
                $i = 0;
            @endphp
            @forelse ($challengeData as $challengeData)
                @if($arrworkout[$i] >= $challengeData->workout_plan_count)
                    <?php $wbar = 'full'; ?>
                @else
                    <?php $wbar = strval($arrworkout[$i])/strval($challengeData->workout_plan_count)*100; ?>
                    <?php $wbar = '['.$wbar.'%]'; ?>
                @endif

                @if($arrdiet[$i] >= $challengeData->diet_plan_count)
                    <?php $dbar = 'full'; ?>
                @else
                    <?php $dbar = strval($arrdiet[$i])/strval($challengeData->diet_plan_count)*100; ?>
                    <?php $dbar = '['.$dbar.'%]'; ?>
                @endif

                <div class="p-2 lg:w-1/3 lg:h-fit">
                    <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange flex flex-col">
                        <div class="relative">
                            <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl py-2 px-4 top-0 right-0 absolute text-md">
                                {{ DateTime::createFromFormat('Y-m-d', $challengeData->start_date)->format('j M Y') }}
                                -
                                {{ DateTime::createFromFormat('Y-m-d', $challengeData->end_date)->format('j M Y') }}
                            </div>
                        </div>
                        <div class="p-2 flex flex-col pt-7 gap-2">
                            <div>
                                <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">{{ $challengeData->name }}</h3>
                                <h4 class="pl-2 pr-2 mr-20 h-fit lg:h-[90px] lg:mr-17 text-sm">{{ $challengeData->description }}</h4>
                            </div>
                            <div class="flex gap-2">
                                @if( $challengeData->workout_plan_count != 0)
                                    <div class="w-2/5 font-bold">
                                        <div class="rounded-full border-2 border-cBlue h-7 w-full text-center relative flex overflow-hidden">
                                            <div class="bg-cBlue h-full w-{{ $wbar }}"></div>
                                            <p class="absolute translate-x-[-50%] left-[50%]">{{ $arrworkout[$i] }}/{{ $challengeData->workout_plan_count }}</p>
                                        </div>
                                        <p class="font-bold text-center text-cBlue">WORKOUT</p>
                                    </div>
                                @endif
                                @if( $challengeData->diet_plan_count != 0)
                                    <div class="w-2/5 font-bold">
                                        <div class="rounded-full border-2 border-cGreen h-7 text-center relative flex overflow-hidden">
                                            <div class="bg-cGreen h-full w-{{ $dbar }}"></div>
                                            <p class="absolute translate-x-[-50%] left-[50%]">{{ $arrdiet[$i] }}/{{ $challengeData->diet_plan_count }}</p>
                                        </div>
                                        <p class="font-bold text-center text-cGreen">DIET</p>
                                    </div>
                                @endif
                                <div class="flex gap-1">
                                    <span class="material-symbols-outlined text-cYellow">
                                        toll
                                    </span>
                                    <h5>{{ $challengeData->points }}</h5>
                                </div>
                            </div>
                            @if($arrworkout[$i] >= $challengeData->workout_plan_count and $arrdiet[$i] >= $challengeData->diet_plan_count)
                            <form action="/challenges/claim" method="POST">
                                @csrf
                                <input  type="hidden"  name="challenge_id" value=" {{ $challengeData->id }}">
                                <button type="submit" class="w-full h-fit py-2 px-5 rounded-full bg-cOrange text-white border-2 hover:bg-white hover:border-cOrange hover:text-cOrange duration-300 ease-out cursor-pointer text-center">Claim</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
            @empty
                <div class="w-screen flex justify-center">
                    <h3 class="text-cOrange">Wait for Upcoming Challenge</h3>
                </div>
            @endforelse
        </div>
    </div>
    <x-navbar active="challenge" admin="false"/>
@endsection

@section('scripts')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        function wbar(a, b) {
            if (a == b) {
                $(document).ready(function() {
                    $("#wb").addClass("w-full")
                });
            } else {
                $(document).ready(function() {
                    $("#wb").addClass("w-", a, "/", b)
                });
            }
        }
    </script> --}}
@endsection
