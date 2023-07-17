@extends('workout_meditation.workoutMeditationTemplate')

@section('titleActive', 'Meditation')
@section('isMeditationActive', 'activeCategory')
@section('description', "Let's Meditate!")

@section('content')
    {{-- Cards Plan Container --}}
    <div class="w-full justify-center ">

        <div class="p-2 w-full justify-center content-center mt-4 lg:mt-0">
                {{-- Search Bar --}}
            <form class="mb-10 items-center justify-center content-center">
                <div class="flex items-center justify-center content-center">
                    <div class="relative w-[80%] box-border">
                        <input type="search" id="search-dropdown" class="block p-3 w-full z-20 text-sm text-gray-900 bg-white border-l-white border-l-2 border border-gray-300 rounded-xl overflow-hidden" placeholder="Find your perfect meditation audio..." autocomplete="off" name="search" value="{{ request('search') }}">

                        <button type="submit" class="absolute top-0 right-0 p-3 text-sm font-medium bg-white text-white  rounded-xl">
                            {{-- Gambar Search --}}
                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="#428FDE" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>

            {{-- Card Meditation --}}
            <div class="lg:w-full hover:cursor-pointer lg:grid lg:grid-cols-2 lg:justify-start lg:gap-2">
            @forelse ($meditations as $meditation)
                <form action="/meditationDetails" method="POST" class="form">
                    @csrf
                    <div class="btn lg:w-[390px] md:max-w-full text-center py-5 flex bg-white rounded-3xl relative mb-4 shadow-lg hover:bg-blue-200 duration-500 focus:ring-cBlue">
                        <h2 class="w-full text-md font-bold flex justify-center">
                            {{ $meditation->name }}
                            <span class="material-symbols-outlined">
                                play_arrow
                            </span>
                        </h2>
                    </div>
                    <input type="hidden" name="meditation_id" value="{{ $meditation->id }}">
                </form>
            @empty
                <h3 class="flex justify-center text-cBlue">Wait for Upcoming Sound Track</h3>
            @endforelse
            </div>
        </div>
    <script>
        var form = document.getElementsByClassName("form")
        for(let i = 0; i < form.length; i++){
            document.getElementsByClassName('btn')[i].addEventListener('click', function(){
                form[i].submit();
            })
        }
    </script>

@endsection
