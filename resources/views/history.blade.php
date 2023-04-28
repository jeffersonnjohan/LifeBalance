@extends('master')

@section('title', 'History')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('body')
    <div class="bg-cLightGrey h-full w-full">
        @extends('component.backbutton')
        @section('backlink', '/home')

        {{-- Bar --}}

        {{-- Unfinished --}}
        <div class="text-white mt-10 bg-cRed p-2">
            {{-- Capsule plan --}}
            <h2 class="p-2 pb-0 text-lg">Unfinished Plan!</h2>
            <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-cRed shadow-lg">
                <div class="w-8 h-[70px] bg-cBlue rounded-bl-3xl rounded-tl-3xl"></div>
                <div class="self-center p-2 h-full w-full">
                    <h3>Burn Fat in 7 Days!</h3>
                    <h4>2 days left!</h4>
                </div>
            </div>
        </div>


        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cBlue rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cBlue">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cGreen rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cGreen">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cBlue rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cBlue">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cGreen rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cGreen">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cBlue rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cBlue">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cGreen rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cGreen">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cBlue rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cBlue">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cGreen rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cGreen">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cBlue rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cBlue">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>
        {{-- Capsule plan --}}
        <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
            <div class="w-8 h-[70px] bg-cGreen rounded-bl-3xl rounded-tl-3xl"></div>
            <div class="self-center p-2 h-full w-full">
                <h3 class="text-lg font-bold">Burn Fat in 7 Days!</h3>
                <h4 class="text-md text-cGreen">2 days left!</h4>
            </div>
            <div class="flex flex-row items-center p-2 mr-2">
                <span class="material-symbols-outlined text-cYellow">
                    toll
                </span>
                <h3 class="font-medium text-md">5</h3>
            </div>
        </div>

    </div>
    @include('component.navbar')
@endsection
