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
        <div class="fixed z-10 w-[300px] h-fit mt-5 translate-x-[-50%] left-[50%] rounded-full bg-green-200 text-cGreen flex items-center px-4 py-2 text-sm text-center">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    @if(session()->has('loginError'))
        <div class="fixed z-10 w-fit h-fit mt-5 translate-x-[-50%] left-[50%] rounded-full bg-red-200 text-cRed flex items-center px-4 py-2 text-sm text-center">
            <p>{{ session('loginError') }}</p>
        </div>
    @endif
    <div class="fixed h-full w-full flex p-3">
        @include('component.bgtemplate')
        <div class="bg-white w-fit h-fit m-auto absolute left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] rounded-3xl flex flex-col justify-center items-center text-center p-5 shadow-lg">
            <div class="mb-5">
                <div class="text-2xl font-bold">Welcome Back!</div>
                <div class="text-sm w-[300px]">Sign in and get back to life healthy!</div>
            </div>
            <form action="/login" class="flex flex-col gap-2" method="post">
                @csrf
                <div class="flex flex-col gap-1">
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue" id="username-container">
                        <span class="material-symbols-outlined">
                            person
                        </span>
                        <input type="text" name="username" id="username" placeholder="Username" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full" autofocus required value="{{ old('username') }}">
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <div class="w-[300px] h-[50px] rounded-full bg-cLightGrey flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue" required id="password-container">
                        <span class="material-symbols-outlined">
                            lock
                        </span>
                        <input type="password" name="password" id="password" required placeholder="Password" class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
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
                </div>

                <input type="submit" value="Log In" class="w-[300px] h-[50px] rounded-full bg-cBlue text-white hover:bg-white focus:outline-none focus:ring-2 focus:ring-cBlue hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm font-medium">
                <div class="flex justify-center items-center gap-2 text-xs focus-within:text-cBlue">
                    <div class="bg-cDarkGrey w-32 h-0.5"></div>
                    <div class="text-cDarkGrey">
                        <p>OR</p>
                    </div>
                    <div class="bg-cDarkGrey w-32 h-0.5"></div>
                </div>
                <a href="/auth/github/redirect" class="w-[300px] h-[50px] rounded-full text-white hover:text-black bg-black hover:bg-white focus:ring-2 focus:outline-none focus:ring-black hover:ring-black font-medium text-sm text-center border-2 border-black inline-flex items-center justify-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mb-2 duration-300 ease-out cursor-pointer">
                    <svg class="w-4 h-4 mr-2 -ml-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                    Sign in with Github
                </a>
                <div class="flex justify-center items-center gap-2 text-xs focus-within:text-cBlue">
                    <div class="text-cDarkGrey">
                        <p>Doesn't have an account? <a href="/signup" class="text-cRed font-bold">Register</a></p>
                    </div>
                </div>
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

        // const slider = document.querySelector('.items');
        // let isDown = false;
        // let startX;
        // let scrollLeft;

        // slider.addEventListener('mousedown', (e) => {
        // isDown = true;
        // slider.classList.add('active');
        // startX = e.pageX - slider.offsetLeft;
        // scrollLeft = slider.scrollLeft;
        // });
        // slider.addEventListener('mouseleave', () => {
        // isDown = false;
        // slider.classList.remove('active');
        // });
        // slider.addEventListener('mouseup', () => {
        // isDown = false;
        // slider.classList.remove('active');
        // });
        // slider.addEventListener('mousemove', (e) => {
        // if(!isDown) return;
        // e.preventDefault();
        // const x = e.pageX - slider.offsetLeft;
        // const walk = (x - startX) * 3; //scroll-fast
        // slider.scrollLeft = scrollLeft - walk;
        // console.log(walk);
        // });
    </script>
@endsection
