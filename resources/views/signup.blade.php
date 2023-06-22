@extends('datainput')

@section('toptitle', 'Let’s Get Started')

@section('topdesc', 'Create an account to get all LifeBalance features!')

@section('directpage', '/signup')

@section('username')
{{ old('username') }}
@endsection

@section('address')
{{ old('address') }}
@endsection

@section('dob')
<div class="flex flex-col gap-1">
    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue @error('dob') ring-cRed text-cRed focus-within:text-cRed hover:text-cRed @enderror" id="dob-container" oninput="removeDOBAlert()">
        <span class="material-symbols-outlined">
            calendar_month
        </span>
        {{-- <input type="date" name="dob" id="dob" placeholder="DOB (dd/mm/yyyy)" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full"> --}}
        <input type="text" name="dob" id="dob" placeholder="Date of Birth" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full" value="{{ old('dob') }}"
        onfocus="(this.type='date')" onblur="(this.type= this.value ? 'date' : 'text')">
    </div>
    @error('dob')
        <p class="text-cRed text text-left px-4 text-xs" id="dob-alert-txt">{{ $message }}</p>
    @enderror
</div>
@endsection

@section('img_weight_height')
<div class="w-[300px] h-fit flex items-center text-cDarkGrey justify-between gap-2">
    <div class="flex flex-col gap-1">
        <div class="relative aspect-square h-full bg-cLightGrey rounded-3xl">
            <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" onchange="loadFile(event)" class="hidden" value="{{ old('image') }}" oninput="removeImageAlert()">
            <label for="image" class="h-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute @error('image') ring-cRed text-cRed focus-within:text-cRed hover:text-cRed @enderror" id="imgBox">
            </label>
            <div class="h-full w-full flex flex-col justify-center items-center p-2">
                <span class="material-symbols-outlined @error('image') text-cRed @enderror" id="imageicon">
                    image
                </span>
                <div class="text-sm">
                    <p>Put your photo here</p>
                </div>
            </div>
        </div>
        @error('image')
            <p class="text-cRed text text-left px-4 text-xs" id="image-alert-txt">{{ $message }}</p>
        @enderror
    </div>
    <div class="w-full h-full rounded-3xl flex flex-col justify-between gap-2">
        <div class="flex flex-col gap-1">
            <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue @error('weight') ring-cRed text-cRed focus-within:text-cRed hover:text-cRed @enderror" id="weight-container" oninput="removeWeightAlert()">
                <span class="material-symbols-outlined">
                    weight
                </span>
                <input type="number" name="weight" id="weight" placeholder="Weight (Kg)"  class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full" value="{{ old('weight') }}">
            </div>
            @error('weight')
                <p class="text-cRed text text-left px-4 text-xs" id="weight-alert-txt">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col gap-1">
            <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue @error('height') ring-cRed text-cRed focus-within:text-cRed hover:text-cRed @enderror" id="height-container" oninput="removeHeightAlert()">
                <span class="material-symbols-outlined">
                    height
                </span>
                <input type="number" name="height" id="height" placeholder="Height (cm)" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full" value="{{ old('height') }}">
            </div>
            @error('height')
                <p class="text-cRed text text-left px-4 text-xs" id="height-alert-txt">{{ $message }}</p>
            @enderror
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
