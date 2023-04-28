@extends('master')

@section('title', 'Plan Diet')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('body')
    @extends('component.backbutton')
    @section('backlink', '/diet')
    <div class="bg-cLightGrey w-full h-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p>Intermittent Fasting</p>
        </div>
        <div class=" h-60 w-full bg-cover" style="background-image: url('assets/intermittentFasting.png')"></div>
        <div class="bg-cGreen -mt-2">
            <p class="p-2 text-lg font-normal text-center text-white">
                Intermittent fasting is an eating strategy that doesn’t define what you eat but instead when you eat it. It’s grown in popularity in recent years for weight loss, reducing insulin resistance, lowering inflammation, and even anti-aging.
                <br>
                What’s amazing is that intermittent fasting studies show you don’t have to change your diet whatsoever to lose weight.
            </p>
        </div>
        <div class="m-3 border-2 border-cGreen rounded-lg shadow-md">
            <h1 class="text-center text-cGreen font-bold text-2xl">DAY 1 :</h1>
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
            <table>

            </table>
        </div>
        <div class="m-3 border-2 border-cGreen rounded-lg shadow-md bg-cDarkGrey">
            <h1 class="text-center text-cGreen font-bold text-2xl">DAY 2 :</h1>
            <div class="grid place-items-center">
                <span class="material-symbols-outlined -mt-8">
                    lock
                </span>
            </div>
        </div>
        <div class="pb-16 flex flex-row place-content-end mr-4 ">
            <h3 class="text-cGreen font-bold text-xl">DONE</h3>
            <div class="border-cGreen border-4 w-5 h-5 self-center ml-2">
            </div>
        </div>
    </div>
@endsection
