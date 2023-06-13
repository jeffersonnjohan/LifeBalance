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
    <div class="bg-cLightGrey h-full w-full mb-28">
        <div class="bg-cOrange h-fit rounded-b-[50px] lg:rounded-b-[100px] mb-2">
            <h1 class="text-white text-3xl font-n'id'ormal text-left pt-12 pb-12 pl-10 pr-10 lg:text-center">Ayo Ikuti Challenge
                <br> Dan Dapatkan Keuntungan Pointnya!</h1>
        </div>
        <div class="lg:flex lg:flex-wrap lg:p-4">
            @for ($i = 0; $i < $challengeData->count(); $i++)
                @if($arrworkout[$i] >= $challengeData[$i]['workout_plan_count'])
                    <?php $wbar = 'w-full'; ?>
                @else
                    <?php $wbar = 'w-'.strval($arrworkout[$i]).'/'.strval($challengeData[$i]['workout_plan_count']); ?>
                @endif
                @if($arrdiet[$i] >= $challengeData[$i]['diet_plan_count'])
                    <?php $dbar = 'w-full'; ?>
                @else
                    <?php $dbar = 'w-'.strval($arrdiet[$i]).'/'.strval($challengeData[$i]['diet_plan_count']); ?>
                @endif
                <div class="p-2 lg:w-1/3 lg:h-fit">
                    <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange ">
                        <div class="relative">
                            <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl py-2 px-4 top-0 right-0 absolute text-md">
                                {{ DateTime::createFromFormat('Y-m-d', $challengeData[$i]['start_date'])->format('j M Y') }}
                                -
                                {{ DateTime::createFromFormat('Y-m-d', $challengeData[$i]['end_date'])->format('j M Y') }}
                            </div>
                        </div>
                        <div class="p-2 flex flex-col pt-7">
                            <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">{{ $challengeData[$i]['name'] }}</h3>
                            <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">{{ $challengeData[$i]['description'] }}</h4>
                            <div class="flex p-2 gap-2">
                                @if( $challengeData[$i]['workout_plan_count'] != 0)
                                    <div class="font-bold rounded-full border-2 border-cBlue h-7 w-2/5 text-center relative flex overflow-hidden">
                                        <div class="bg-cBlue h-full {{ $wbar }}"></div>
                                        <p class="absolute translate-x-[-50%] left-[50%]">{{ $arrworkout[$i] }}/{{ $challengeData[$i]['workout_plan_count'] }}</p>
                                    </div>
                                @endif
                                @if( $challengeData[$i]['diet_plan_count'] != 0)
                                    <div class="font-bold rounded-full border-2 border-cGreen h-7 w-2/5 text-center relative flex overflow-hidden">
                                        <div class="bg-cGreen h-full {{ $dbar }}"></div>
                                        <p class="absolute translate-x-[-50%] left-[50%]">{{ $arrdiet[$i] }}/{{ $challengeData[$i]['diet_plan_count'] }}</p>
                                    </div>
                                @endif
                                <div class="flex gap-1">
                                    <span class="material-symbols-outlined text-cYellow">
                                        toll
                                    </span>
                                    <h5>{{ $challengeData[$i]['points'] }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    @include('component.navbar', ['active' => 'challenge'])
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
