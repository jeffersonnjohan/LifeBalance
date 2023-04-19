@extends('datainput')

@section('toptitle', 'Let’s Get Started')

@section('topdesc', 'Create an account to get all LifeBalance features!')

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
