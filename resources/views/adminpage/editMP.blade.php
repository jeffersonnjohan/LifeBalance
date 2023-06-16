@extends('master')

@section('title', 'Add Meditation Plan - Admin Page')

@section('style')
    <style>
        /* * {
            border: red solid 0.5px;
        } */
    </style>
@endsection

{{-- Header --}}
<nav class="justify-evenly fixed bg-cLightGrey w-full z-10">
    <div class="max-w-screen-xl px-4 py-3 mx-auto lg:mx-4">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-2 text-2xl">
                <li>
                    <p class="text-cBlue font-extrabold dark:text-white hover:text-cBlue">Meditation</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white hover:text-cBlue">Plans</p>
                </li>
            </ul>
            <a href="#" class="fixed bg-cBlue rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a>
        </div>
    </div>
</nav>

@section('body')

    {{-- Page Body Section --}}
        <form action="/admin/meditation/update" method="post" class="pt-16  bg-cLightGrey w-full overflow-auto lg:flex lg:flex-row lg:w-full  enctype="multipart/form-data">

        @csrf
        <input type="hidden" name="editID" value="{{ $meditation->id }}">
        <div class="lg:fixed lg:bg-cBlue lg:flex lg:flex-col lg:place-content-center lg:m-auto lg:h-full lg:rounded-r-[100px] lg:w-[25%]">
        </div>
        <div class="lg:flex lg:flex-col lg:w-full lg:ml-[25%]">
            <div class="px-3">
                <div class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                    <input type="text" name="planTitle" id="planTitle" placeholder="Plan Title" value="{{ $meditation->name }}" required class="p-0 text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                </div>
            </div>
            <div class="pt-4 px-3">
                <div class="w-full h-[120px] rounded-3xl bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                    {{-- <input type="text" name="description" id="description" placeholder="Description" value="{{ $meditation->description }}" required class="p-0 text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full"> --}}
                    <textarea type="text" name="description" id="description" placeholder="Description" required class="p-0 lg:py-10 pt text-left lg:text-center lg:self-center h-[100px] resize-none border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full"></textarea>
                </div>
            </div>
            <div class="flex-row flex px-3 pb-10">
                <div class="w-3/6 h-[120px] flex items-center text-cDarkGrey justify-between gap-2 pt-4 p-2 pl-0">
                    <div class="relative w-full aspect-square h-full bg-white rounded-3xl shadow-lg">
                        <input type="file" name="image" id="image" accept="image/*,video/*" class="hidden" onchange="loadFile(event)">
                        <input type="hidden" name="oldImage" value="{{ $oldImg }}">
                        <label for="image" class="h-full w-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute" id="imgBox" style="background-image: url('{{ asset('/storage/'.$oldImg) }}')">
                        </label>
                        <div class="h-full w-full flex flex-col justify-center items-center p-2">
                            <span class="material-symbols-outlined">
                                image
                            </span>
                            <div class="text-sm text-center">
                                <p>Input Image/Video</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-3/6 h-[120px] items-center text-cDarkGrey justify-between gap-2 pt-4 p-2 pr-0">
                    <div class="relative aspect-square w-full h-full bg-white rounded-3xl shadow-lg">
                        <input type="file" name="song" id="song" accept="audio/*" class="hidden">
                        <input type="hidden" name="oldSong" value="{{ $oldSong }}">
                        <label for="song"
                            class="h-full w-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute"
                            id="imgBox">
                        </label>
                        <div class="h-full w-full flex flex-col justify-center items-center p-2">
                            <span class="material-symbols-outlined">
                                library_music
                            </span>
                            <div class="text-sm text-center">
                                <p id="songtxt">Current Song</p>
                            </div>
                        </div>
                        <audio id="audio" controls class="hidden" autoplay>
                            <source src="{{ asset('/storage/'.$oldSong) }}" id="src" />
                        </audio>
                    </div>
                </div>
            </div>
        </div>
        {{-- Confirm Button --}}
        <div class="bottom-0 fixed w-full px-3 lg:pb-0 ">
            <div class="lg:fixed lg:right-0 lg:left-[25%] lg:px-4 lg:pb-2 lg:flex-row lg:flex lg:gap-2 lg:bottom-0">
                <div class="pt-2 pb-2 lg:w-[50%]">
                    <div class="w-full h-[50px] rounded-full bg-cBlue text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white focus-within:ring-2 hover:text-cBlue hover:bg-white shadow-lg">
                        <input type="submit" name="confirmButton" id="confirmButton" value="Confirm" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                </div>
                <div class="pt-2 pb-2 bottom-0 lg:w-[50%]">
                <a href="/admin/meditation" class="w-full h-[50px] rounded-full bg-cRed text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white focus-within:ring-2 hover:text-cRed hover:bg-white shadow-lg ring-cRed hover:ring-cRed">
                        <div class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full text-center">Discard</div>
                    </a>
                </div>
            </div>
        </div>
        </form>
    {{-- </div> --}}
    {{-- @include('adminpage.adminNavbar', ['active' => 'adminpage.listWorkout']) --}}

@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    imgBox = document.getElementById('imgBox');
    var loadFile = function(event) {
        imgBox.style.backgroundImage = 'url(' + URL.createObjectURL(event.target.files[0]) + ')';
    }

    songtxt = document.getElementById('songtxt')

    $(document).ready(function() {
        $('#song').change(function(e) {
            var songname = e.target.files[0].name
            songtxt.innerHTML = songname
        });
    });

    function handleFiles(event) {
        var files = event.target.files;
        $("#src").attr("src", URL.createObjectURL(files[0]));
        document.getElementById("audio").load();
    }

    document.getElementById("song").addEventListener("change", handleFiles, false);

    function myFunction() {
        var x = document.getElementById("audio").autoplay;
    }

</script>
@endsection
