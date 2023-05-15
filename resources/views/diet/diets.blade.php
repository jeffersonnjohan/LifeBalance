@extends('master')

@section('title', 'Diet')

@section('style')
    <style>
        /* * {
            border: red solid 0.5px;
        } */
    </style>
@endsection

@section('body')
    <div class="bg-cLightGrey h-full w-full mb-28">

        <div class="bg-cGreen h-fit rounded-b-[50px] lg:rounded-b-[100px]">
            <h1 class="text-white text-3xl font-normal text-left p-6 pt-16 lg:text-center lg:text-4xl">Jaga Pola Makan Anda dari Dini!</h1>
            <div class="place-items-center grid pb-6 hover:text-cGreen lg:justify-content-center">
                <div class="px-2 bg-white flex w-[90%]  lg:w-[40%] items-center justify-between rounded-3xl shadow-sm mb-4 duration-300 hover:ring-2 ring-cDarkGrey focus-within:ring-cDarkGrey hover:text-cGreen hover:items-cGreen focus-within:text-cGreen">
                    <input type="text" name="saerchDiet" id="searchDiet" placeholder="Searching for new plan?" class="focus-within:text-cGreen hover:text-cGreen  border-transparent bg-transparent focus:ring-0 focus:border-transparent text-black text-left font-normal p-2 w-full lg:text-lg lg:px-4">
                    <span class="material-symbols-outlined p-2">
                        search
                    </span>
        <div class="bg-cGreen h-fit rounded-b-[50px] lg:rounded-b-[100px]">
            <h1 class="text-white text-3xl font-normal text-left p-6 pt-16 lg:text-center lg:text-4xl">Jaga Pola Makan Anda dari Dini!</h1>
            <div class="place-items-center grid pb-6 hover:text-cGreen lg:justify-content-center">
                <div class="px-2 bg-white flex w-[90%] lg:w-[40%] items-center justify-between rounded-3xl shadow-sm mb-4 duration-300 hover:ring-2">
                    <form action="/diets" class="flex flex-row border-transparent bg-transparent focus:ring-0 focus:border-transparent text-black text-left font-normal p-2 w-full ring-cDarkGrey focus-within:ring-cDarkGrey hover:text-cGreen hover:items-cGreen focus-within:text-cGreen">
                        <input type="text" name="search" id="searchDiet" placeholder="Searching for new plan?" class="focus-within:text-cGreen hover:text-cGreen border-transparent bg-transparent focus:ring-0 focus:border-transparent text-black text-left font-normal p-2 w-full lg:text-lg lg:px-4"  value="{{ request('search') }}">
                        <button type="submit"class="material-symbols-outlined p-2" >
                            search
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <h2 class="text-xl p-2 lg:px-4 font-medium ml-3 mt-2 lg:text-lg">Plan</h2>

        <?php $unenroll_plans = array(); $idx = 0; ?>
        <h3 class="flex justify-center text-cGreen">Enrolled Plan</h3>

        <div class="lg:flex lg:flex-wrap lg:w-full lg:px-4 ">
        @foreach ( $diets as $diet )
            @if (in_array(strval($diet->id), $enrollments->toArray()))
                <form action="/dietDays" method="POST" class="enrolled_form">
                @csrf
                    <input type="hidden" name="diet_id" value="{{ $diet->id }}">
                    <div class="place-items-center grid p-2 lg:w-1/3">

                        <div class="enrolled_element bg-white w-[95%] lg:w-full h-fit lg:h-[150px] place-content-center rounded-3xl p-2 lg:p-4 flex flex-row justify-between shadow-sm group duration-300 ease-out hover:bg-green-200 focus:ring-cGreen" >
                            <div class="flex flex-row items-center">
                                <div class="rounded-full lg:rounded-3xl bg-cover justify-end items-center h-16 lg:h-32 w-16 lg:w-32 m-2 lg:m-0 border-2 border-cGreen" style="background-image: url('{{ $diet->image . '.png' }}')"></div>
                                <div class="lg:pl-2">
                                    <h2 class="font-medium text-lg lg:text-xl">{{ $diet->name }}</h2>
                                    <h2 class="font-normal text-md text-cGreen lg:text-lg"> @excerpt($diet->description)</h2>
                                </div>
                            </div>
                            <div class="flex flex-row items-center p-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h3 class="font-medium text-md lg:text-xl">{{ $diet->points }}</h3>
                            </div>
                        </div>
                    </div>
                </form>
            @else
                <?php $unenroll_plans[] = $diet ?>
            @endif
        @endforeach
        </div>

        <?php $idx = 0;?>
        @if ( $unenroll_plans )
        <h3 class="flex justify-center mt-10 text-cGreen">Not Enrolled Plan</h3>

        <div class="lg:flex lg:flex-wrap lg:w-full lg:px-4 ">
            @foreach ($unenroll_plans as $plan)
                <form action="/dietDays" method="POST" class="unenrolled_form">
                @csrf
                    <input type="hidden" name="diet_id" value="{{ $plan->id }}">
                    <input type="hidden" name="is_new" value="1">
                    <div class="place-items-center grid p-2 lg:w-1/3" data-modal-target="popup-modal{{ $loop->iteration }}" data-modal-toggle="popup-modal{{ $loop->iteration }}">
                        <div class="bg-white w-[95%] lg:w-full h-fit lg:h-[150px] place-content-center rounded-3xl p-2 lg:p-4 flex flex-row justify-between shadow-sm group duration-300 ease-out hover:bg-green-200 focus:ring-cGreen" >
                            <div class="flex flex-row items-center">
                                <div class="rounded-full bg-cover justify-end items-center h-16 w-16  m-2 border-2 border-cGreen" style="background-image: url('{{ $plan->image . '.png' }}')"></div>
                                <div>
                                    <h2 class="font-medium text-lg">{{ $plan->name }}</h2>
                                    <h2 class="font-normal text-md text-cGreen"> @excerpt($plan->description)</h2>
                                </div>
                            </div>
                            <div class="flex flex-row items-center p-2">
                                <span class="material-symbols-outlined text-cYellow">
                                    toll
                                </span>
                                <h3 class="font-medium text-md">{{ $plan->points }}</h3>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- Pop up --}}
                <div id="popup-modal{{ $loop->iteration }}" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal{{ $loop->iteration }}">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-6 text-center">

                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure to join this plan?</h3>
                                <button data-modal-hide="popup-modal{{ $loop->iteration }}" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>

                                <button data-modal-hide="popup-modal" type="button" class="popup text-white bg-cGreen hover:bg-cGreen focus:ring-4 focus:outline-none dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                Yes, I'm sure
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
           </div>
        @endif

    </div>
    @include('component.navbar', ['active' => 'diet'])

    <script>
        var form1 = document.getElementsByClassName ("enrolled_form");
        var form2 = document.getElementsByClassName ("unenrolled_form");

        for(let i = 0; i < form1.length; i++){
            document.getElementsByClassName("enrolled_element")[i].addEventListener("click", function () {
                form1[i].submit();
            });
        }
        for(let i = 0; i < form2.length; i++){
            document.getElementsByClassName("popup")[i].addEventListener("click", function () {
                form2[i].submit();
            });
        }
    </script>
@endsection
