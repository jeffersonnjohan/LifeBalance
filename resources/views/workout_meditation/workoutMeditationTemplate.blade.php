@extends('master')

@section('title')
    @yield('titleActive')
@endsection

@section('body')
    <div class="w-full">
        {{-- Kotak Biru Atas --}}
        <div class="w-full h-[390px] p-10 pt-16 bg-cBlue rounded-b-[50px]">
            <h1 class="text-3xl text-white">Workout Yuk!</h1>
            <h2>Categories</h2>

            {{-- Category Container --}}
            <div class="w-80% h-[160px] flex mt-5 justify-between mb-5">
                {{-- Category Satuan --}}
                {{-- Class selected --}}
                <a href="/workouts" class="w-[48%]">
                    <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isWorkoutActive')">
                        {{-- Image Atas --}}
                        <div class="h-[65%] w-full bg-cover" style="background-image: url('/assets/olahragaCategory.png')">
                        </div>
                        <p class="text-center text-white mt-3">Olahraga</p>
                    </div>
                </a>
                {{-- Category Satuan --}}
                <a href="/meditations" class="w-[48%]">
                    <div class="w-full h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden @yield('isMeditationActive')">
                        {{-- Image Atas --}}
                        <div class="h-[65%] w-full bg-cover" style="background-image: url('/assets/meditasiCategory.png')">
                        </div>
                        <p class="text-center text-white mt-3">Meditasi</p>
                    </div>
                </a>
            </div>

            @yield('content')

    </div>

        @include('component.navbar', ['active' => 'workout'])
    </div>
@endsection

@section('scripts')
    @yield('script')
@endsection
