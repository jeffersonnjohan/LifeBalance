@extends('master')

@section('title', 'Add Workout Plan - Admin Page')

@section('style')
    <style>
        /* * {
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
                    <p class="text-cBlue font-extrabold dark:text-white">Workout</p>
                </li>
                <li>
                    <p class="text-black font-extrabold dark:text-white">Plans</p>
                </li>
            </ul>
            {{-- <a href="/profile"
                class="fixed bg-cBlue rounded-b-3xl flex justify-center items-center aspect-square h-[50px] shadow-lg right-2 -top-0.5 z-10 group duration-300 ease-out hover:bg-white">
                <div class="bg-white rounded-full p-4 bg-cover mt-2"
                    style="background-image: url({{ '/storage/' . App\Models\User::find(Auth::user()->id)['image'] }})">
                </div>
            </a> --}}
        </div>
    </div>
</nav>

@section('body')
    <form action="/admin/workout" method="post" class="pt-16 w-full bg-cLightGrey lg:flex lg:flex-row lg:w-full"
        enctype="multipart/form-data">
        @csrf
        {{-- Page Body Section --}}
        {{-- <div > --}}
        <div class="lg:relative lg:w-[25%]">
            <div
                class="lg:fixed lg:bg-cBlue lg:flex lg:flex-col lg:place-content-center lg:m-auto lg:h-full lg:rounded-r-[100px] lg:w-[25%]">
                {{-- Title & Point --}}
                <div class="flex flex-row lg:flex-col gap-2 pt-2 pb-2 px-3">
                    {{-- Title --}}
                    <div
                        class="w-[75%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                        <input type="text" name="planTitle" id="planTitle" value="{{ old('planTitle') }}"
                            placeholder="Plan Title" required
                            class="p-0 text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    @error('planTitle')
                        <p class="text-cLightGrey text text-left px-4 -mt-2 text-xs">{{ $message }}</p>
                    @enderror

                    {{-- Point --}}
                    <div
                        class="w-[25%] lg:w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                        <input type="number" name="points" id="points" value="{{ old('points') }}" placeholder="Points"
                            required
                            class="p-0 text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                    </div>
                    @error('points')
                        <p class="text-cLightGrey text text-left px-4 -mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Description & Input Image --}}
                <div class="flex flex-row lg:flex-col lg:pt-0 gap-2 pt-2 pb-2 px-3">
                    {{-- Description --}}
                    <div
                        class="w-[75%] lg:w-full h-[120px] rounded-3xl bg-white flex items-center text-cDarkGrey px-4 duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                        {{-- <input type="text" name="description" id="description" placeholder="Description" required
                                class="p-0 text-left lg:text-center border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full"> --}}
                        <textarea type="text" name="description" id="description" placeholder="Description" required
                            class="p-0 lg:py-10 pt text-left lg:text-center lg:self-center h-[100px] resize-none border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">{{ old('description') }}</textarea>
                    </div>
                    @error('description')
                        <p class="text-cLightGrey text text-left px-4 -mt-2 text-xs">{{ $message }}</p>
                    @enderror
                    {{-- Input Image --}}
                    <div class="w-[25%] lg:w-full h-[120px] flex items-center text-cDarkGrey justify-between pl-0">
                        <div class="relative w-full aspect-square h-full bg-white rounded-3xl shadow-lg">
                            <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg"
                                class="hidden" onchange="loadFile(event)">
                            <label for="image"
                                class="h-full w-full aspect-square rounded-3xl p-2 flex flex-col justify-center items-center cursor-pointer duration-300 hover:ring-2 focus-within:ring-2 hover:text-cBlue bg-cover bg-center absolute"
                                id="imgBox">
                            </label>
                            <div class="h-full w-full flex flex-col justify-center items-center p-2">
                                <span class="material-symbols-outlined">
                                    image
                                </span>
                                <div class="text-sm text-center">
                                    <p>Input Img</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('image')
                        <p class="text-cLightGrey text text-left px-4 -mt-2 text-xs">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="lg:flex lg:flex-col lg:w-[75%]">
            {{-- Add Details per Day --}}
            <div id="containerDay">
                <div class="px-3 ">
                    <div class="pt-2 pb-2 ">
                        {{-- Button Add ExerciseDetail --}}
                        <div
                            class="w-full h-[50px] rounded-full bg-cBlue bg-opacity-50 flex items-center text-cDarkGrey px-4 gap-2">
                            <h2
                                class="dayHeader border-transparent bg-transparent text-sm font-bold text-cDarkBlue text-center w-full">
                                Day 1</h2>
                            <span
                                class="cursor-pointer deleteExerciseDetail material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                                delete
                            </span>
                            <span
                                class="cursor-pointer exerciseDetail material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                                add_circle
                            </span>
                        </div>
                    </div>
                    <div class="containerExercise">
                        {{-- Add Exercise --}}
                        <div class="flex flex-row gap-2 w-full h-fit pb-2">
                            <div class="bg-cDarkGrey bg-opacity-10 h-[140px] w-full rounded-3xl px-4 pt-4">
                                <div
                                    class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                    <div
                                        class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                        <select name="exerciseID[0][]" id="exerciseName"
                                            class="cursor-pointer border-0 bg-transparent w-full h-full rounded-full hover:border-transparent focus-within:border-transparent active:border-transparent">
                                            <option value="exerciseName">Exercise Name</option>
                                            @foreach ($workoutActivities as $workoutActivity)
                                                <option value="{{ $workoutActivity->id }}">{{ $workoutActivity->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="flex flex-row justify-between pt-2 w-full h-[px] gap-2">
                                    <div
                                        class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                        <input type="number" name="repetition[0][]" id="repetition"
                                            placeholder="Repetition" required
                                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                    </div>
                                    <div
                                        class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg ">
                                        <input type="number" name="calories[0][]" id="calories" placeholder="Calories"
                                            required
                                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                    </div>
                                    <div
                                        class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                        <input type="number" name="duration[0][]" id="duration" placeholder="Duration"
                                            required
                                            class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                    </div>
                                </div>
                            </div>
                            <span
                                class="cursor-pointer material-symbols-outlined rounded-full h-fit my-auto p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:border-cDarkBlue focus:border-5 focus:border-cDarkblue hover:text-black text-white">
                                delete
                            </span>
                        </div>

                    </div>

                </div>
            </div>
            {{-- <div id="addMore" class="flex flex-row pt-2 pb-2 text-cBlue place-content-center pr-2">
                    <span class="material-symbols-outlined ">
                        add
                    </span>
                    <h3>Add More</h3>
                </div> --}}

            <div class="mb-10 pt-2 pb-2 flex text-cBlue pr-2 place-content-between">
                <div></div>
                <div id="addMore" class="flex flex-row cursor-pointer">
                    <span class="material-symbols-outlined ">
                        add
                    </span>
                    <h3>Add More</h3>
                </div>
            </div>


            <div class="pb-40"></div>
            {{-- Confirm & Discard Button --}}
            <div class="bottom-0 fixed pb-4 lg:pb-0 w-full px-3">
                <div class="lg:fixed lg:right-0 lg:left-[25%] lg:px-4 lg:pb-2 lg:flex-row lg:flex lg:gap-2 lg:bottom-0">
                    <div class="pt-2 pb-2 lg:w-[50%]">
                        <div
                            class="w-full h-[50px] rounded-full bg-cBlue text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white hover:text-cBlue focus-within:ring-2 hover:bg-white shadow-lg">
                            <input type="submit" name="confirmButton" id="confirmButton" value="Confirm" required
                                class="cursor-pointer border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                        </div>
                    </div>
                    <div class="pt-2 pb-2 bottom-0 lg:w-[50%]">
                        <a href="/admin/workout"
                            class="w-full h-[50px] rounded-full bg-cRed text-white flex items-center font-bold px-4 duration-300 hover:ring-2 focus-within:text-white focus-within:ring-2 hover:text-cRed hover:bg-white shadow-lg ring-cRed hover:ring-cRed">
                            <div
                                class="cursor-pointer border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full text-center">
                                Discard</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- </div> --}}
    </form>
    {{-- @include('adminpage.adminNavbar', ['active' => 'adminpage.listWorkout']) --}}
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
        function initializationElement() {
            imgBox = document.getElementById('imgBox');
            addMoreButton = document.getElementById('addMore');
            containerDay = document.getElementById('containerDay');
            buttonAddExerciseDetail = document.getElementsByClassName('exerciseDetail')
            buttonRemoveExerciseDetail = document.getElementsByClassName('deleteExerciseDetail')

            // Remove event handler
            for (let i = 0; i < buttonAddExerciseDetail.length; i++) {
                buttonAddExerciseDetail[i] = recreateNode(buttonAddExerciseDetail[i])
            }

            for (let i = 0; i < buttonRemoveExerciseDetail.length; i++) {
                buttonRemoveExerciseDetail[i] = recreateNode(buttonRemoveExerciseDetail[i])
            }


            containerExercise = document.getElementsByClassName('containerExercise')
            countDay = containerExercise.length
            dayHeader = document.getElementsByClassName('dayHeader')

            // Remove event handler
            // Remove exact exercise detail
            for (let i = 0; i < containerExercise.length; i++) {
                children = containerExercise[i].children

                for (let j = 0; j < children.length; j++) {
                    children[j].lastElementChild = recreateNode(children[j].lastElementChild)
                }
            }

            days = containerDay.children;

            updateDayHeader()
            onClickSetter()
        }

        // console.log(containerExercise[0].children[0].lastElementChild );
        // On Click Listener
        function onClickSetter() {
            // Add Day
            addMoreButton.removeEventListener('click', addMoreButtonOnClick)
            addMoreButton.addEventListener('click', addMoreButtonOnClick)

            // Loop add exercise detail for each day
            for (let i = 0; i < buttonAddExerciseDetail.length; i++) {
                buttonAddExerciseDetail[i].addEventListener('click', function() {
                    addExerciseOnClick(i)
                })
            }

            // Loop remove exercise detail for each day
            for (let i = 0; i < buttonRemoveExerciseDetail.length; i++) {
                buttonRemoveExerciseDetail[i].addEventListener('click', function() {
                    removeExactDay(i)
                })
            }

            // Remove exact exercise detail
            for (let i = 0; i < containerExercise.length; i++) {
                let children = containerExercise[i].children

                for (let j = 0; j < children.length; j++) {
                    buttonRemoveElementChild = children[j].lastElementChild

                    buttonRemoveElementChild.addEventListener('click', function() {
                        children[j].remove()

                        removeDay()
                        initializationElement()
                    })
                }
            }
        }

        // Function Definition
        function addMoreButtonOnClick() {
            containerDay.innerHTML += dayCard(++countDay)
            initializationElement()
        }

        function dayCard(i) {
            return `
            <div class="px-3">
                <div  class="pt-2 pb-2 ">
                    <div class="w-full h-[50px] rounded-full bg-cBlue bg-opacity-50 flex items-center text-cDarkGrey px-4 gap-2">
                        <h2 class="dayHeader border-transparent bg-transparent text-sm font-bold text-cDarkBlue text-center w-full">Day ` +
                i + `</h2>
                        <span class="deleteExerciseDetail material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:text-black text-white">
                            delete
                        </span>
                        <span class="exerciseDetail material-symbols-outlined rounded-full p-2 scale-100 duration-300 ease-out bg-cBlue hover:bg-white hover:text-black text-white">
                            add_circle
                        </span>
                    </div>
                </div>

                <div class="containerExercise">
                    <div  class="flex flex-row gap-2 w-full h-fit pb-2">
                        <div  class="bg-cDarkGrey bg-opacity-10 h-[140px] w-full rounded-3xl px-4 pt-4">
                            <div class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                <div class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                    <select name="exerciseID[][]" id="exerciseName" class="border-0 bg-transparent w-full h-full rounded-full hover:border-transparent focus-within:border-transparent active:border-transparent">
                                        <option value="exerciseName">Exercise Name</option>
                                        @foreach ($workoutActivities as $workoutActivity)
                                            <option value="{{ $workoutActivity->id }}">{{ $workoutActivity->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="flex flex-row justify-between pt-2 w-full h-[px] gap-2">
                                <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                    <input type="number" name="repetition[][]" id="repetition" placeholder="Repetition" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                </div>
                                <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg ">
                                    <input type="number" name="calories[][]" id="calories" placeholder="Calories" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                </div>
                                <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                    <input type="number" name="duration[][]" id="duration" placeholder="Duration" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                </div>
                            </div>
                        </div>
                        <span class=" material-symbols-outlined rounded-full h-fit my-auto p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:border-cDarkBlue focus:border-5 focus:border-cDarkblue hover:text-black text-white">
                            delete
                        </span>
                    </div>
                </div>
            </div>
        `

        }

        function addExerciseOnClick(i) {
            containerExercise[i].innerHTML += `
                {{-- Add Exercise --}}
                <div  class="flex flex-row gap-2 w-full h-fit pb-2">
                    <div  class="bg-cDarkGrey bg-opacity-10 h-[140px] w-full rounded-3xl px-4 pt-4">
                        <div class="w-full h-[50px] rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                            <div class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                                <select name="exerciseID[][]" id="exerciseName" class="border-0 bg-transparent w-full h-full rounded-full hover:border-transparent focus-within:border-transparent active:border-transparent">
                                    <option value="exerciseName">Exercise Name</option>
                                    @foreach ($workoutActivities as $workoutActivity)
                                        <option value="{{ $workoutActivity->id }}">{{ $workoutActivity->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="flex flex-row justify-between pt-2 w-full h-[px] gap-2">
                            <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                <input type="number" name="repetition[][]" id="repetition" placeholder="Repetition" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                            </div>
                            <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg ">
                                <input type="number" name="calories[][]" id="calories" placeholder="Calories" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                            </div>
                            <div class="h-[52px] w-full rounded-full bg-white flex items-center text-cDarkGrey duration-300 hover:ring-2 focus-within:text-cBlue focus-within:ring-2 hover:text-cBlue shadow-lg">
                                <input type="number" name="duration[][]" id="duration" placeholder="Duration" required class="border-transparent bg-transparent focus:ring-0 focus:border-transparent text-sm w-full">
                            </div>
                        </div>
                    </div>
                    <span class=" material-symbols-outlined rounded-full h-fit my-auto p-2 scale-100 duration-300 ease-out bg-cRed hover:bg-white hover:border-cDarkBlue focus:border-5 focus:border-cDarkblue hover:text-black text-white">
                        delete
                    </span>
                </div>
                `

            initializationElement()
        }

        function recreateNode(el, withChildren) {
            if (withChildren) {
                el.parentNode.replaceChild(el.cloneNode(true), el);
            } else {
                var newEl = el.cloneNode(false);
                while (el.hasChildNodes()) newEl.appendChild(el.firstChild);
                el.parentNode.replaceChild(newEl, el);
            }
        }

        function removeDay() {
            for (let i = 0; i < containerExercise.length; i++) {
                children = containerExercise[i].children
                if (children.length == 0) {
                    removeExactDay(i)
                }
            }
        }

        function removeExactDay(i) {
            days[i].remove()

            initializationElement()
        }

        function updateDayHeader() {
            // Update day header and set repetition[j][]
            for (let j = 0, counter = 1; j < dayHeader.length; j++) {
                dayHeader[j].innerHTML = 'Day ' + (counter++)

                // Update Container Exercise
                let hariKeJ = containerExercise[j].children;

                for (let k = 0; k < hariKeJ.length; k++) {
                    // let exerciseKHariKeJ = hariKeJ.
                    let elementSelectKHariKeJ = hariKeJ[k].children[0].children[0].children[0].lastElementChild
                    elementSelectKHariKeJ.setAttribute('name', "exerciseID[" + j + "][]")

                    let containerRepCalDurKHariKeJ = hariKeJ[k].children[0].lastElementChild

                    let inputRepKHariKeJ = containerRepCalDurKHariKeJ.children[0].children[0]
                    inputRepKHariKeJ.setAttribute('name', "repetition[" + j + "][]")

                    let inputCalKHariKeJ = containerRepCalDurKHariKeJ.children[1].children[0]
                    inputCalKHariKeJ.setAttribute('name', "calories[" + j + "][]")

                    let inputDurKHariKeJ = containerRepCalDurKHariKeJ.children[2].children[0]
                    inputDurKHariKeJ.setAttribute('name', "duration[" + j + "][]")

                }
                // console.log(hariKeJ.length)
            }
        }
    </script>
@endsection
