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
    @if(session()->has('success'))
        <div class="fixed z-10 w-fit h-fit mt-5 translate-x-[-50%] left-[50%] rounded-full bg-green-200 text-cGreen flex items-center px-4 py-2 text-sm text-center">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @if(session()->has('loginError'))
        <div class="fixed z-10 w-fit h-fit mt-5 translate-x-[-50%] left-[50%] rounded-full bg-red-200 text-cRed flex items-center px-4 py-2 text-sm text-center">
            <p>{{ session('loginError') }}</p>
        </div>
    @endif
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
        <div class="bg-white w-fit h-fit m-auto absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] rounded-3xl flex flex-col justify-center items-center text-center p-5 shadow-lg">
            <div class="mb-5">
                <div class="text-2xl font-bold">Welcome Back!</div>
                <div class="text-sm w-[300px]">Sign in and get back to life healthy!</div>
            </div>
            <form action="/login" class="flex flex-col gap-2" method="post">
                @csrf
                <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                    <input type="text" name="username" id="username" placeholder="Username" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full" autofocus>
                </div>
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
                <div class="flex justify-center items-center gap-2 text-xs focus-within:text-cBlue">
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

@section('scripts')
    <script>
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
