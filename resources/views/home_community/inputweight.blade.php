@extends('home_community.home')
@section('body')
    <div class="bg-black opacity-70 w-full max-h-full justify-center items-center text-center p-5 shadow-lg"></div>
    <div class="bg-cLightGrey w-fit h-fit m-auto absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] rounded-3xl flex flex-col justify-center items-center text-center p-5 shadow-lg">
        <div class="mb-5">
            <div class="text-2xl font-bold">Hey!</div>
            <div class="mx-auto text-sm w-[300px]">Please input your current weight.</div>
            <div class="bg-white h-20 m-5 ml-10 mr-10 justify-center items-center rounded-3xl flex text-cBlue gap-3">
                <span class="material-symbols-outlined scale-150 ml-10">
                    weight
                </span>
                <input type="number" placeholder="Weight (Kg)" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm">
            </div>
            <a href="/home">
            <input type="submit" value="Confirm" class="w-[300px] h-[50px] rounded-full bg-cBlue text-white hover:bg-white hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm">
            </a>
        </div>
    </div>
@endsection
