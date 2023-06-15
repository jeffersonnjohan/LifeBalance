@extends('datainput')

@section('toptitle', 'Let’s Get Started')

@section('topdesc', 'Create an account to get all LifeBalance features!')

@section('directpage', '/signup')

@section('dob')
<div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
    <span class="material-symbols-outlined">
        calendar_month
    </span>
    <input type="date" name="dob" id="dob" placeholder="DOB (dd/mm/yyyy)" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
</div>
@endsection

@section('img_weight_height')
<div class="w-[300px] h-[110px] flex items-center text-cDarkGrey justify-between gap-2">
    <div class="relative aspect-square h-full bg-cLightGrey rounded-3xl">
        <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" required onchange="loadFile(event)" class="hidden">
        <label for="image" class="h-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute" id="imgBox">
        </label>
        <div class="h-full w-full flex flex-col justify-center items-center p-2">
            <span class="material-symbols-outlined">
                image
            </span>
            <div class="text-sm">
                <p>Put your photo here</p>
            </div>
        </div>
    </div>
    <div class="w-full h-full rounded-3xl flex flex-col justify-between">
        <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
            <span class="material-symbols-outlined">
                weight
            </span>
            <input type="number" name="weight" id="weight" placeholder="Weight (Kg)"  required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
        </div>
        <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
            <span class="material-symbols-outlined">
                height
            </span>
            <input type="number" name="height" id="height" placeholder="Height (cm)" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
        </div>
    </div>
</div>
@endsection

@section('haveaccount')
    <div class="flex justify-center items-center gap-2 text-xs">
        <div class="bg-cDarkGrey w-10 h-0.5"></div>
        <div class="text-cDarkGrey">
            <p>Already have an account? <a href="/login" class="text-cRed font-bold">here</a></p>
        </div>
        <div class="bg-cDarkGrey w-10 h-0.5"></div>
    </div>
@endsection

@section('button', 'Register')
