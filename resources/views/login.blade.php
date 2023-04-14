@extends('master')

@section('title', 'Login')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('body')
    <div class="fixed h-full w-full flex gap-3 flex-col p-3">
        <div class="w-full h-[80%] flex gap-3">
            <div class="h-full w-[60%] flex flex-col gap-3">
                <div class="bg-cOrange w-full h-[60%] rounded-3xl"></div>
                <div class="bg-cRed w-full h-[40%] rounded-3xl"></div>
            </div>
            <div class=" h-full w-[40%] flex flex-col gap-3">
                <div class="bg-cGreen w-full h-[40%] rounded-3xl"></div>
                <div class="bg-cBlue w-full h-[30%] rounded-3xl"></div>
                <div class="bg-cOrange w-full h-[30%] rounded-3xl"></div>
            </div>
        </div>
        <div class="w-full h-[20%] flex gap-3">
            <div class="bg-cGreen h-full w-[40%] rounded-3xl"></div>
            <div class="bg-cBlue h-full w-[60%] rounded-3xl"></div>
        </div>
        <div class="bg-white w-fit h-fit m-auto absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] rounded-3xl flex flex-col justify-center items-center text-center p-5">
            <div class="mb-5">
                <div class="text-2xl font-bold">Welcome Back!</div>
                <div class="text-sm w-[300px]">Sign in and get back to life healthy!</div>
            </div>
            <form action="POST" class="flex flex-col gap-2">
                <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                    <span class="material-symbols-outlined">
                        mail
                    </span>
                    <input type="text" name="email" id="email" placeholder="Email" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                </div>
                <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                    <span class="material-symbols-outlined">
                        lock
                    </span>
                    <input type="password" name="password" id="password" placeholder="Password" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    <span class="material-symbols-outlined">
                        visibility
                    </span>
                </div>
                <div class="flex justify-center items-center gap-2 text-xs">
                    <div class="bg-cDarkGrey w-10 h-0.5"></div>
                    <div class="text-cDarkGrey">
                        <p>Doesn't have an account? <a href="/signup" class="text-cRed font-bold">here</a></p>
                    </div>
                    <div class="bg-cDarkGrey w-10 h-0.5"></div>
                </div>
                <input type="submit" value="Log In" class="w-[300px] h-[50px] rounded-full bg-cBlue text-white hover:bg-white hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm">
            </form>
        </div>
    </div>
@endsection
