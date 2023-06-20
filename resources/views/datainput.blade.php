@extends('master')

@section('title', 'Sign Up')

@section('style')
    <style>
        /* * {
                                border: red solid 0.5px;
                            } */

        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-calendar-picker-indicator {
            background: transparent;
            bottom: 0;
            color: transparent;
            -webkit-appearance: none;
            background-repeat: repeat-x;
            width: 16px;
            position: absolute;
            left: 73px;
            top: 310px;
            z-index: 0;
        }

        /* @media (max-width: 390px) {
            input[type="date"]::-webkit-calendar-picker-indicator {
                /* background: transparent; */
                bottom: 0;
                color: transparent;
                -webkit-appearance: none;
                background-repeat: repeat-x;
                width: 16px;
                position: absolute;
                left: 73px;
                top: 290px;
                z-index: 0;
            /* } */
        /* } */ */
    </style>
@endsection

@section('body')
    @yield('backbtn')
    <div class="fixed h-full w-full flex p-3">
        @include('component.bgtemplate')
        <div
            class="w-fit h-[100vh] top-[50%] translate-y-[-50%] left-[50%] translate-x-[-50%] absolute overflow-auto divscroll flex items-center p-10">
            <div
                class="bg-white w-fit h-fit m-auto rounded-3xl flex flex-col justify-center items-center text-center p-5 shadow-lg">
                <div class="mb-5">
                    <div class="text-2xl font-bold">@yield('toptitle')</div>
                    <div class="text-sm w-[300px]">@yield('topdesc')</div>
                </div>
                <form action="@yield('directpage')" class="flex flex-col gap-2" method="post" enctype="multipart/form-data">
                    @csrf
                    <div
                        class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <input type="text" name="username" id="username" placeholder="Username"
                            value="@yield('username')" required
                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full"
                            autofocus>
                    </div>
                    <div
                        class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                        <input type="text" name="address" id="address" placeholder="Address" value="@yield('address')"
                            required
                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    @yield('dob')
                    <div class="w-[300px] h-[150px] flex items-center text-cDarkGrey justify-between gap-2">
                        @if ($userdata['gender'] == 'male')
                            <input type="radio" name="gender" id="male" required class="peer/male hidden"
                                value="male" checked>
                            <label
                                class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2"
                                for="male">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1"
                                    style="background-image: url('assets/male.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Male</div>
                                </div>
                            </label>
                            <input type="radio" name="gender" id="female" class="peer/female hidden" value="female">
                            <label
                                class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2"
                                for="female">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1"
                                    style="background-image: url('assets/female.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Female</div>
                                </div>
                            </label>
                        @elseif ($userdata['gender'] == 'female')
                            <input type="radio" name="gender" id="male" required class="peer/male hidden"
                                value="male">
                            <label
                                class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2"
                                for="male">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1"
                                    style="background-image: url('assets/male.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Male</div>
                                </div>
                            </label>
                            <input type="radio" name="gender" id="female" class="peer/female hidden" value="female"
                                checked>
                            <label
                                class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2"
                                for="female">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1"
                                    style="background-image: url('assets/female.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Female</div>
                                </div>
                            </label>
                        @else
                            <input type="radio" name="gender" id="male" required class="peer/male hidden"
                                value="male">
                            <label
                                class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2"
                                for="male">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1"
                                    style="background-image: url('assets/male.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Male</div>
                                </div>
                            </label>
                            <input type="radio" name="gender" id="female" class="peer/female hidden" value="female">
                            <label
                                class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2"
                                for="female">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1"
                                    style="background-image: url('assets/female.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Female</div>
                                </div>
                            </label>
                        @endif
                    </div>
                    @yield('img_weight_height')
                    <div
                        class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                        <input type="password" name="password" id="password" placeholder="Password" required
                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        <div class="flex items-center z-10 cursor-pointer hover:text-cDarkBlue duration-300 ease-out"
                            onclick="visibility()" id="on">
                            <span class="material-symbols-outlined">
                                visibility
                            </span>
                        </div>
                        <div class="flex items-center z-10 cursor-pointer hover:text-cDarkBlue duration-300 ease-out hidden"
                            onclick="visibility()" id="off">
                            <span class="material-symbols-outlined">
                                visibility_off
                            </span>
                        </div>
                    </div>
                    @yield('haveaccount')
                    <input type="submit" value="@yield('button')"
                        class="w-[300px] h-[50px] rounded-full bg-cBlue text-white hover:bg-white hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm">
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
