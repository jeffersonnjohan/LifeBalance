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
    </style>
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
                <div class="text-2xl font-bold">Let’s Get Started</div>
                <div class="text-sm w-[300px]">Create an account to get all LifeBalance features!</div>
            </div>
            <form action="POST" class="flex flex-col gap-2">
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
                <div class="w-[300px] h-[150px] flex items-center text-cDarkGrey justify-between">
                    <input type="radio" name="gender" id="male" class="peer/male hidden">
                    <label class="w-[48%] h-full bg-cLightGrey rounded-3xl peer-checked/male:bg-cBlue duration-300 hover:ring-2" for="male">
                        <div class="w-full h-full bg-cover flex flex-col justify-end items-center p-1" style="background-image: url('assets/male.png')">
                            <div class="text-sm font-bold text-cDarkBlue">Male</div>
                        </div>
                    </label>
                    <input type="radio" name="gender" id="female" class="peer/female hidden">
                    <label class="w-[48%] h-full bg-cLightGrey rounded-3xl peer-checked/female:bg-cBlue duration-300 hover:ring-2" for="female">
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
                    <span class="material-symbols-outlined">
                        visibility
                    </span>
                </div>
                <div class="w-[300px] h-[110px] flex items-center text-cDarkGrey justify-between gap-2">
                    <input type="file" name="photo" id="photo" class="hidden" onchange="loadFile(event)">
                    <label for="photo" id="photocontainer" class="h-full aspect-square bg-cLightGrey rounded-3xl flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2">
                        {{-- <div class="border border-black h-full w-full" id="imgBox"></div> --}}
                        <span id="photologo" class="material-symbols-outlined hidden">
                            image
                        </span>
                        <img id="photopreview" src="" class="w-full h-full hidden rounded-3xl">
                        <div id="photoplaceholder" class="text-sm w-[80%]">
                            <p>Put your photo here</p>
                        </div>
                    </label>
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
                <div class="flex justify-center items-center gap-2 text-xs">
                    <div class="bg-cDarkGrey w-10 h-0.5"></div>
                    <div class="text-cDarkGrey">
                        <p>Already have an account? <a href="/login" class="text-cRed font-bold">here</a></p>
                    </div>
                    <div class="bg-cDarkGrey w-10 h-0.5"></div>
                </div>
                <input type="submit" value="Submit" class="w-[300px] h-[50px] rounded-full bg-cBlue text-white hover:bg-white hover:text-cBlue border-2 border-cBlue duration-300 ease-out cursor-pointer text-sm">
                
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#photo').change(function(){
                let reader = new FileReader();
                reader.onload = (e) => { 
                    $('#photopreview').attr('src', e.target.result); 
                    $('#photopreview').removeClass('hidden'); 
                    $('#photoplaceholder').addClass('hidden'); 
                    $('#photologo').html(''); 
                }
                reader.readAsDataURL(this.files[0]); 
            });
        });
    </script>
@endsection