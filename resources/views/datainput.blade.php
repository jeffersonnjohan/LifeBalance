@extends('master')

@section('title', 'Sign Up')

@section('style')
    <style>
        /* * {
            border: red solid 0.5px;
        } */

        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-calendar-picker-indicator {
            display: none;
            -webkit-appearance: none;
        }

        .divscroll::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            border-radius: 10px;
            background-color: #F5F5F5;
        }

        .divscroll::-webkit-scrollbar
        {
            width: 12px;
            background-color: #F5F5F5;
        }

        .divscroll::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
            background-color: #7E7E7E;
        }
    </style>
@endsection

@section('body')
    <div class="fixed h-full w-full flex flex-col p-3 gap-3">
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
        <div class="w-fit h-[100vh] top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] absolute overflow-auto divscroll flex items-center p-10">
            <div class="bg-white w-fit h-fit m-auto rounded-3xl flex flex-col justify-center items-center text-center p-5 shadow-lg">
                <div class="mb-5">
                    <div class="text-2xl font-bold">@yield('toptitle')</div>
                    <div class="text-sm w-[300px]">@yield('topdesc')</div>
                </div>
                <form action="/login" class="flex flex-col gap-2">
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <input type="text" name="email" id="email" placeholder="Name" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                        <input type="text" name="email" id="email" placeholder="Email" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    <div class="w-[300px] h-[150px] flex items-center text-cDarkGrey justify-between gap-2">
                        <input type="radio" name="gender" id="male" class="peer/male hidden">
                        <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2" for="male">
                            <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/male.png')">
                                <div class="text-sm font-bold text-cDarkBlue">Male</div>
                            </div>
                        </label>
                        <input type="radio" name="gender" id="female" class="peer/female hidden">
                        <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2" for="female">
                            <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/female.png')">
                                <div class="text-sm font-bold text-cDarkBlue">Female</div>
                            </div>
                        </label>
                    </div>
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                        <input type="text" name="address" id="address" placeholder="Address" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                        <span class="material-symbols-outlined">
                            calendar_month
                        </span>
                        <input type="date" name="dob" id="dob" placeholder="DOB (dd/mm/yyyy)" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                        <input type="password" name="password" id="password" placeholder="Password" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        <div class="flex items-center z-10 cursor-pointer hover:text-cDarkBlue duration-300 ease-out" onclick="visibility()" id="on">
                            <span class="material-symbols-outlined">
                                visibility
                            </span>
                        </div>
                        <div class="flex items-center z-10 cursor-pointer hover:text-cDarkBlue duration-300 ease-out hidden" onclick="visibility()" id="off">
                            <span class="material-symbols-outlined">
                                visibility_off
                            </span>
                        </div>
                    </div>
                    <div class="w-[300px] h-[110px] flex items-center text-cDarkGrey justify-between gap-2">
                        <div class="relative aspect-square h-full bg-cLightGrey rounded-3xl">
                            <input type="file" name="photo" id="photo" class="hidden" onchange="loadFile(event)">
                            <label for="photo" class="h-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 bg-cover bg-center absolute" id="imgBox">
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
                            <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                                <span class="material-symbols-outlined">
                                    weight
                                </span>
                                <input type="number" name="dob" id="dob" placeholder="Weight (Kg)" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                            </div>
                            <div class="w-full h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2">
                                <span class="material-symbols-outlined">
                                    height
                                </span>
                                <input type="number" name="dob" id="dob" placeholder="Height (cm)" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                            </div>
                        </div>
                    </div>
                    @yield('haveaccount')
                    <input type="submit" value="@yield('button')" class="w-[300px] h-[50px] rounded-full bg-cBlue text-white hover:bg-white hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm">
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        imgBox = document.getElementById('imgBox');
        var loadFile = function(event) {
            imgBox.style.backgroundImage = 'url(' + URL.createObjectURL(event.target.files[0]) + ')';
        }

        function visibility() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
                $(document).ready(function() {
                    $("#on").addClass("hidden")
                    $("#off").removeClass("hidden")
                });
            } else {
                x.type = "password";
                $(document).ready(function() {
                    $("#off").addClass("hidden")
                    $("#on").removeClass("hidden")
                });
            }
        }
    </script>
@endsection
