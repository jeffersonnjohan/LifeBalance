@extends('datainput')

@section('backbtn')
    @extends('component.backbutton')
    @section('backlink', '/profile')
@endsection

@section('toptitle', 'Edit Profile')

@section('topdesc', 'Let LifeBalance know more about yourself!')

@section('directpage', '/editprofile')

@section('username')
{{ $userdata['username'] }}
@endsection

@section('address')
{{ $userdata['address'] }}
@endsection

@section('dob')
<div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
    <span class="material-symbols-outlined">
        calendar_month
    </span>
    <input type="date" name="dob" id="dob" placeholder="DOB (dd/mm/yyyy)" value="{{ $userdata['dob'] }}" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
</div>
@endsection

@section('weight_height')
<div class="w-full h-full rounded-3xl flex flex-col justify-between">
    <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
        <span class="material-symbols-outlined">
            weight
        </span>
        <input type="number" name="weight" id="weight" placeholder="Weight (Kg)" value="{{ $userdata['weight'] }}" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
    </div>
    <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
        <span class="material-symbols-outlined">
            height
        </span>
        <input type="number" name="height" id="height" placeholder="Height (cm)" value="{{ $userdata['height'] }}" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
    </div>
</div>
@endsection

@section('button', 'Save')
