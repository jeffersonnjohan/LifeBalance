@extends('master')

@section('title', 'Add Diet Plan - Admin Page')

@section('style')
    <style>
        /* *{
            border: red solid 0.5px;
        } */
    </style>
@endsection

{{-- Header --}}
<nav class="justify-evenly fixed bg-gradient-to-b from-cLightGrey from-30% to-transparent w-full z-10">
    <div class="max-w-screen-xl px-4 py-3 mx-auto lg:mx-4">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-2 text-2xl">
                <li>
                    <p class="text-cGreen font-extrabold dark:text-white">Diet</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white">Plans</p>
                </li>
            </ul>
            {{-- <a href="#" class="fixed bg-cGreen rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4" style="background-image: url('/assets/male.png')"></div>
            </a> --}}
        </div>
    </div>
</nav>

@section('body')
<form action="/admin/diet/update" method="post" enctype="multipart/form-data" class="pt-16 bg-cLightGrey w-full overflow-auto lg:flex lg:flex-row lg:w-full ">
    <input type="hidden" name="dietID" value={{ $diet->id }}>
    @csrf
        {{-- Page Body Section --}}
        {{-- <div > --}}
            <div class="lg:relative">
                <div class="lg:fixed lg:bg-cGreen lg:flex lg:flex-col lg:place-content-center lg:m-auto lg:h-full lg:rounded-r-[100px] lg:w-[25%]">
                    {{-- <div class="invisible lg:visible">
                        <h2 class="lg:font-bold lg:text-center lg:text-3xl lg:text-white lg:p-4 lg:pb-5 invisible lg:visible">Add Diet Plan!</h2>
                    </div> --}}
                    <div class="flex flex-row lg:flex-col gap-2 pt-2 pb-2 px-3 ">
                        <div class="ring-cGreen hover:ring-cGreen w-[75%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2  focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                            <input type="text" name="planTitle" id="planTitle" placeholder="Plan Title" value="{{ old('planTitle')?? $diet->name }}" required class="p-0 text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        </div>
                        @if(array_search('planTitle', array_column($error, 'name')) !== FALSE)
                            <p class="text-cLightGrey text text-left px-4 text-xs">{{ $error[array_search('planTitle', array_column($error, 'name'))]->message }}</p>
                        @endif
                        <div class="ring-cGreen hover:ring-cGreen w-[25%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                            <input type="number" name="points" id="points" placeholder="Points" value="{{ old('points')?? $diet->points }}" required class="p-0 text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        </div>
                        @if(array_search('points', array_column($error, 'name')) !== FALSE)
                            <p class="text-cLightGrey text text-left px-4 text-xs">{{ $error[array_search('points', array_column($error, 'name'))]->message }}</p>
                        @endif
                    </div>
                    <div class="flex flex-row lg:flex-col lg:pt-0 gap-2 pt-2 pb-2 px-3 ">
                        <div class="ring-cGreen hover:ring-cGreen w-[75%] lg:w-full h-[120px] rounded-3xl bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                            {{-- <input type="text" name="description" id="description" placeholder="Description" value="{{ $diet->description }}" required class="p-0 text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full "> --}}
                            <textarea type="text" name="description" id="description" placeholder="Description" required class="p-0 lg:py-10 pt text-left lg:text-center lg:self-center h-[100px] resize-none border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
{{ $diet->description }}{{ old('planTitle') }}
                            </textarea>
                        </div>
                        @if(array_search('description', array_column($error, 'name')) !== FALSE)
                            <p class="text-cLightGrey text text-left px-4 text-xs">{{ $error[array_search('description', array_column($error, 'name'))]->message }}</p>
                        @endif
                        <div class="w-[25%] h-[120px] flex items-center text-cDarkGrey justify-between pl-0 lg:w-full">
                            <div class="relative w-full h-full bg-white rounded-3xl shadow-lg">
                                <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg" onchange="loadFile(event)" class="hidden">
                                <input type="hidden" name="oldImage" value="{{ $oldImg }}">
                                <label for="image" class="h-full w-full rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute" id="imgBox" style="background-image: url('{{ asset('/storage/'.$oldImg) }}')">
                                </label>
                                <div class="h-full w-full flex flex-col justify-center items-center p-2">
                                    <span class="material-symbols-outlined">
                                        image
                                    </span>
                                    <div class="text-sm">
                                        <p>Input img</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:flex lg:flex-col lg:w-[75%] lg:ml-[25%]">
                <div id="containerDay">
                    @foreach($dietDays as $dietDay)
                    {{-- Add Plan per Days --}}
                    <div class="px-3">
                        <div class="pt-2 pb-2">
                            <div class="w-full h-[50px] rounded-full bg-cGreen bg-opacity-50 flex items-center text-cDarkGrey px-4">
                                <h2 class="dayHeader border-transparent bg-transparent text-sm font-bold text-cDarkBlue text-center w-full">Day 1</h2>
                                <span class="deleteDay material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white cursor-pointer">
                                    delete
                                </span>
                            </div>
                        </div>
                        {{-- Add Food Recomendation --}}
                        <div class="flex flex-row w-full h-[200px] bg-black bg-opacity-10 pt-2 rounded-3xl">
                            <div class="flex p-2 w-[75%] h-[90%]">
                                <div class="place-content-center h-full w-full rounded-3xl bg-white flex items-center text-cDarkGrey duration-300 ring-cGreen hover:ring-cGreen hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen">
                                    <textarea type="text" name="dietDayDescription[]" id="description" placeholder="Description
(e.g.,
Breakfast : 500 gr
Apel Lunch  : Nasi Padang
Dinner : Es buah)" required class="h-[120px] resize-none border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full ">{{ $dietDay->description}}</textarea>
                                </div>
                            </div>
                            <div class="w-[25%] h-full p-2">
                                <div class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 ring-cGreen hover:ring-cGreen hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                                    <input type="number" name="calories[]" id="calories" placeholder="Calories" value="{{ $dietDay->calories }}" required class="p-0 text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                {{-- <div class="mb-10 flex flex-row pt-2 pb-2 text-cGreen place-content-end pr-2" id="addMore">
                    <span class="material-symbols-outlined ">
                        add
                    </span>
                    <h3>Add More</h3>
                </div> --}}

                <div class="mb-10 pt-2 pb-2 flex text-cGreen pr-2 place-content-between">
                    <div></div>
                    <div id="addMore" class="flex flex-row cursor-pointer">
                        <span class="material-symbols-outlined ">
                            add
                        </span>
                        <h3>Add More</h3>
                    </div>
                </div>

                <div class="pb-40"></div>
                {{-- Confirm Button --}}
                <div class="bottom-0 fixed lg:relative lg:pb-0 w-full px-3">
                    <div class="lg:fixed lg:right-0 lg:left-[25%] lg:px-4 lg:pb-2 lg:flex-row lg:flex lg:gap-2 lg:bottom-0">
                        <div class="pt-2 pb-2 lg:w-[50%]">
                            <div class="w-full h-[50px] rounded-full bg-cGreen text-white flex items-center font-bold px-4 duration-300 hover:ring-2 ring-cGreen focus-within:text-white focus-within:ring-2 hover:text-cGreen hover:bg-white shadow-lg">
                                <input type="submit" name="confirmButton" id="confirmButton" value="Confirm" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full cursor-pointer">
                            </div>
                        </div>
                        <div class="pt-2 pb-2 bottom-0 lg:w-[50%]">
                            <a href="/admin/diet" class="w-full h-[50px] rounded-full bg-cRed text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white focus-within:ring-2 hover:text-cRed hover:bg-white shadow-lg ring-cRed hover:ring-cRed">
                                <div class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full text-center">Discard</div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        {{-- </div> --}}
    {{-- @include('adminpage.adminNavbar', ['active' => 'adminpage.listDiet']) --}}
</form>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        // Initialization awal
        initializationElement()

        // Untuk Preview Image
        var loadFile = function(event) {
            imgBox.style.backgroundImage = 'url(' + URL.createObjectURL(event.target.files[0]) + ')';
        }

        // Initilization Element
        function initializationElement(){
            imgBox = document.getElementById('imgBox');
            addMoreButton = document.getElementById('addMore');
            containerDay = document.getElementById('containerDay');
            dayHeader = document.getElementsByClassName('dayHeader')
            countDay = dayHeader.length
            buttonRemoveDay = document.getElementsByClassName('deleteDay')
            days = containerDay.children

            for(let i = 0; i < buttonRemoveDay.length; i++){
                buttonRemoveDay[i] = recreateNode(buttonRemoveDay[i])
            }

            updateDayHeader()
            onClickSetter()
        }

        function onClickSetter(){
            // Add Day
            addMoreButton.removeEventListener('click', addMoreButtonOnClick)
            addMoreButton.addEventListener('click', addMoreButtonOnClick)

            // Remove day
            for(let i = 0; i < buttonRemoveDay.length; i++){
                buttonRemoveDay[i].addEventListener('click', function(){
                    removeExactDay(i)
                })
            }
        }

        function removeExactDay(i){
            days[i].remove()

            initializationElement()
        }

        function addMoreButtonOnClick(){
            containerDay.innerHTML += dayCard(++countDay)
            initializationElement()
        }

        function dayCard(i){
            return `
            {{-- Add Plan per Days --}}
                    <div class="px-3">
                        <div class="pt-2 pb-2">
                            <div class="w-full h-[50px] rounded-full bg-cGreen bg-opacity-50 flex items-center text-cDarkGrey px-4">
                                <h2 class="dayHeader border-transparent bg-transparent text-sm font-bold text-cDarkBlue text-center w-full">Day `+i+`</h2>
                                <span class="deleteDay material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                    delete
                                </span>
                            </div>
                        </div>
                        {{-- Add Food Recomendation --}}
                        <div class="flex flex-row w-full h-[200px] bg-black bg-opacity-10 pt-2 rounded-3xl">
                            <div class="flex p-2 w-[75%] h-[90%]">
                                <div class="place-content-center h-full w-full rounded-3xl bg-white flex items-center text-cDarkGrey duration-300 ring-cGreen hover:ring-cGreen hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen">
                                    <textarea type="text" name="dietDayDescription[]" id="description" placeholder="Description
(e.g.,
Breakfast : 500 gr
Apel Lunch  : Nasi Padang
Dinner : Es buah)" required class="h-[120px] resize-none border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full "></textarea>
                                </div>
                            </div>
                            <div class="w-[25%] h-full p-2">
                                <div class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 ring-cGreen hover:ring-cGreen hover:ring-2 focus-within:text-cGreen focus-within:ring-2 hover:text-cGreen shadow-lg">
                                    <input type="number" name="calories[]" id="calories" placeholder="Calories" required class="text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                </div>
                            </div>
                        </div>
                    </div>
            `;
        }

        function updateDayHeader(){
            for(let j = 0, counter = 1; j < dayHeader.length; j++){
                dayHeader[j].innerHTML = 'Day ' + (counter++)
            }
        }

        function recreateNode(el, withChildren) {
            if (withChildren) {
                el.parentNode.replaceChild(el.cloneNode(true), el);
            }
            else {
                var newEl = el.cloneNode(false);
                while (el.hasChildNodes()) newEl.appendChild(el.firstChild);
                el.parentNode.replaceChild(newEl, el);
            }
        }
    </script>
@endsection
