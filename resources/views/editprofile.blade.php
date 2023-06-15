@extends('datainput')

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

@section('img_weight_height')
<div class="w-[300px] h-[110px] flex items-center text-cDarkGrey justify-between gap-2">
    <div class="relative aspect-square h-full bg-cLightGrey rounded-3xl">
        <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" onchange="loadFile(event)" class="hidden">
        <input type="hidden" name="oldImage" value="{{ $userdata['image'] }}">
        <label for="image" class="h-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute" id="imgBox" style="background-image: url('{{ asset('/storage/'.$userdata['image']) }}')">
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
            <input type="number" name="weight" id="weight" placeholder="Weight (Kg)" value="{{ $userdata['weight'] }}" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
        </div>
        <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
            <span class="material-symbols-outlined">
                height
            </span>
            <input type="number" name="height" id="height" placeholder="Height (cm)" value="{{ $userdata['height'] }}" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
        </div>
    </div>
</div>
@endsection

@section('button', 'Save')
