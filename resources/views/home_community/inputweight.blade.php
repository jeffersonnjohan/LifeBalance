@extends('home_community.home')
@section('body')
    <div class="bg-black opacity-70 w-full max-h-full justify-center items-center text-center p-5 shadow-lg z-10"></div>
    <div class="fixed bg-white h-[60%] w-[90%] left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] justify-center flex gap-3 flex-col p-3 rounded-3xl z-10">
        <div class="w-full h-[60%] flex gap-3">
            <div class="h-full w-[60%] flex flex-col gap-3">
                <div class="bg-cGreen w-full h-[60%] rounded-3xl"></div>
                <div class="bg-cRed w-full h-[40%] rounded-3xl"></div>
            </div>
            <div class="bg-cOrange w-[40%] rounded-3xl"></div>
        </div>
        <div class="w-full h-[40%] flex gap-3">
            <div class="bg-cGreen h-full w-[40%] rounded-3xl"></div>
            <div class="bg-cBlue h-full w-[60%] rounded-3xl"></div>
        </div>
        <div class="bg-cLightGrey w-[80%] h-fit absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] rounded-3xl flex flex-col justify-center items-center text-center p-5 shadow-lg">
            <div class="mb-5 flex-auto text-center">
                <div class="text-2xl font-bold">Hey!</div>
                <div class="text-sm text-center">Please input your current weight.</div>
                <div class="w-[60%] bg-white h-20 m-5 ml-20 mr-20 flex justify-center content-center items-center rounded-3xl text-cBlue gap-3">
                    <span class="material-symbols-outlined scale-150 ml-5">
                        weight
                    </span>
                    <input type="number" placeholder="Input Weight" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm">
                    <p class="font-bold text-lg -ml-40 mr-5">kg</p>
                </div>
                <a href="/home">
                <input type="submit" value="Confirm" class="w-[50%] h-[50px] rounded-full bg-cBlue text-white hover:bg-white hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm">
                </a>
            </div>
        </div>
    </div>
@endsection
