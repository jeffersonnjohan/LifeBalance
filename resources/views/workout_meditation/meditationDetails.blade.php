@extends('master')

@section('title', 'Meditation Details')

@section('style')
    <style>
        * {
            /* border: red solid 0.5px; */
        }
    </style>
@endsection

@section('body')
    @extends('component.backbutton')
    @section('backlink', '/meditations')

    <div class="w-full py-8">
        {{-- Container Foto --}}
        <div class="w-[90%] m-auto rounded-3xl h-[550px] bg-cover" style="background-image: url('/assets/meditationImage.png')">
            
        </div>
        {{-- Controls --}}
        <div class="w-full rounded-t-[50px] h-[300px] fixed bottom-0 bg-cBlue p-4 text-center text-white">
            <hr class="w-[200px] m-auto border-2">
            <h1 class="text-2xl font-bold mt-6">Ambient</h1>
            <p class="text-sm font-normal mt-1">Body charming, mindful eating</p>
        </div>
    </div>
@endsection
