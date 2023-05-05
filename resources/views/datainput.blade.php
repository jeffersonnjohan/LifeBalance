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
    @yield('backbtn')
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
                <form action="@yield('directpage')" class="flex flex-col gap-2" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <input type="text" name="username" id="username" placeholder="Username" value="@yield('username')" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full" autofocus>
                    </div>
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
                        <span class="material-symbols-outlined">
                            location_on
                        </span>
                        <input type="text" name="address" id="address" placeholder="Address" value="@yield('address')" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    @yield('dob')
                    <div class="w-[300px] h-[150px] flex items-center text-cDarkGrey justify-between gap-2">
                        @if( $userdata['gender'] == 'male')
                            <input type="radio" name="gender" id="male" required class="peer/male hidden" value="male" checked>
                            <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2" for="male">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/male.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Male</div>
                                </div>
                            </label>
                            <input type="radio" name="gender" id="female" class="peer/female hidden" value="female">
                            <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2" for="female">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/female.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Female</div>
                                </div>
                            </label>
                        @elseif ($userdata['gender'] == 'female')
                            <input type="radio" name="gender" id="male" required class="peer/male hidden" value="male">
                            <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2" for="male">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/male.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Male</div>
                                </div>
                            </label>
                            <input type="radio" name="gender" id="female" class="peer/female hidden" value="female" checked>
                            <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2" for="female">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/female.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Female</div>
                                </div>
                            </label>
                        @else
                            <input type="radio" name="gender" id="male" required class="peer/male hidden" value="male">
                            <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2" for="male">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/male.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Male</div>
                                </div>
                            </label>
                            <input type="radio" name="gender" id="female" class="peer/female hidden" value="female">
                            <label class="w-[50%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2" for="female">
                                <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/female.png')">
                                    <div class="text-sm font-bold text-cDarkBlue">Female</div>
                                </div>
                            </label>
                        @endif
                    </div>
                    @yield('img_weight_height')
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                        <input type="password" name="password" id="password" placeholder="Password" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
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

        const slider = document.querySelector('.items');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
        });
        slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
        });
        slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
        });
        slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
        });

    </script>
@endsection
