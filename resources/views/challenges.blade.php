@extends('master')

@section('title', 'Challenge')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('body')
    <div class="bg-cLightGrey h-full w-full mb-28">
        <div class="bg-cOrange h-fit rounded-b-[50px] lg:rounded-b-[100px] mb-2">
            <h1 class="text-white text-3xl font-normal text-left pt-12 pb-12 pl-10 pr-10 lg:text-center">Ayo Ikuti Challenge
                <br> Dan Dapatkan Keuntungan Pointnya!</h1>
        </div>
        <div class="lg:flex lg:flex-wrap lg:p-4">
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange ">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan satu workout plan ini sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class="pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full lg:w-full lg:text-center border-2 border-black h-7 w-30">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 lg:w-1/3 lg:h-[150px]">
                <div class="bg-white rounded-3xl h-fit shadow-lg group duration-300 ease-out hover:bg-orange-100 focus:ring-cOrange">
                    <div class="relative">
                        <div class="bg-cOrange h-fit w-fit text-white rounded-tr-3xl rounded-bl-3xl p-2 top-0 right-0 absolute text-md">15-17 Apr</div>
                    </div>
                    <div class="p-2">
                        <h3 class="font-semibold pl-2 pr-2 mr-20 lg:mr-17 pt-4 text-lg">Finish First Workout</h3>
                        <h4 class="pl-2 pr-2 mr-20 lg:mr-17 text-sm">Selesaikan 1 workout plan sebagai satu workout plan pertama Anda, dan dapatkan rewardsnya!</h4>
                        <div class="flex flex-row mr-20 lg:mr-17 p-2">
                            <div class="font-bold rounded-full border-2 border-black h-7 w-30 lg:w-full lg:text-center">
                                <h5 class=" pl-20 pr-20 ">0/1</h5>
                            </div>
                            <div class="flex flex-row pl-2 pr-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h5>5</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('component.navbar', ['active' => 'challenge'])
@endsection
