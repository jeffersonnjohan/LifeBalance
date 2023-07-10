@extends('master')

@section('title')
    @yield('titleActive')
@endsection

@section('body')
    <div class="w-full -mt-6">
        {{-- Kotak Biru Atas --}}
        <div class="lg:w-full lg:flex lg:gap-2">
            <div class="w-full h-[390px] p-10 pt-16 lg:fixed lg:pt-10 bg-cBlue rounded-b-[50px] lg:rounded-bl-[0px] lg:rounded-tr-[50px] lg:w-[30%] lg:h-[800px] lg:mt-16 lg:items-center">
                <h1 class="text-3xl text-white">@yield('description')</h1>
                <h2>Categories</h2>

                {{-- Category Container --}}
                <div class="w-80% h-[160px] flex mt-5 justify-between lg:w-[30vw] lg:flex-col lg:h-fit lg:gap-5 lg:px-5">
                    {{-- Category Satuan --}}
                    {{-- Class selected --}}
                    <a href="/workouts" class="w-[48%] lg:w-[70%] lg:h-[180px] lg:items-center lg:justify-center">
                        <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isWorkoutActive')">
                            {{-- Image Atas --}}
                            <div class="h-[65%] w-full bg-cover lg:h-[75%] md:h-[75%]" style="background-image: url('/assets/olahragaCategory.png')">
                            </div>
                            <p class="text-center text-white mt-3">Workouts</p>
                        </div>
                    </a>
                    {{-- Category Satuan --}}
                    <a href="/meditations" class="w-[48%] lg:w-[70%] lg:h-[180px] lg:items-center lg:justify-center md:w-[80%] md:h-[200px] md:items-center md:justify-center">
                        <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isMeditationActive')">
                            {{-- Image Atas --}}
                            <div class="h-[65%] w-full bg-cover lg:h-[75%] md:h-[75%]" style="background-image: url('/assets/meditasiCategory.png')">
                            </div>
                            <p class="text-center text-white mt-3">Meditations</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="items-center justify-center content-center lg:w-[70%] lg:ml-[30%] lg:p-10 lg:pt-16 lg:items-center lg:justify-center lg:content-center md:w-[70%] md:p-10 md:pt-32 md:items-center md:justify-center md:content-center">
                @yield('content')
            </div>
            {{-- Blank Space --}}
            <div class="h-[100px] bg-transparent lg:hidden"></div>
        </div>
        <x-navbar active="workout" admin="false"/>
    </div>
@endsection

@section('scripts')
    @yield('script')
@endsection
