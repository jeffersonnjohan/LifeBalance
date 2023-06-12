@extends('master')

@section('title')
@yield('bar')
@endsection

@section('style')
    <style>
        * {
            /* border: red solid 0.5px; */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        #post::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        #post {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
@endsection

@section('body')
    @extends('component.backbutton')
    <div class="w-full h-full">
        <div class="h-[70px] flex justify-center items-center text-2xl font-medium">
            <p>@yield('toptitle')</p>
        </div>
        <div class="w-full h-fit px-2 pb-2 lg:flex lg:items-center justify-center">
            <div class="lg:h-fit lg:w-[30vw]">
                <div class="lg:flex lg:flex-col lg:h-fit lg:gap-2 ">
                    <div class="lg:w-full lg:h-fit">
                        <div class="w-full aspect-square flex gap-2 relative mb-2">
                            <div class="w-[60%] h-full flex flex-col gap-2">
                                <div class="w-full h-[40%] bg-cOrange rounded-3xl"></div>
                                <div class="w-full h-[60%] bg-cRed rounded-3xl"></div>
                            </div>
                            <div class="w-[40%] h-full flex flex-col gap-2">
                                <div class="w-full h-[65%] bg-cGreen rounded-3xl"></div>
                                <div class="w-full h-[35%] bg-cBlue rounded-3xl"></div>
                            </div>
                            <div class="h-[75%] aspect-square absolute bg-cLightGrey left-[50%] translate-x-[-50%] top-[50%] translate-y-[-50%] shadow-lg rounded-3xl bg-cover overflow-hidden" style="background-image: url({{ '/storage/'.$userdata['image'] }})">
                                <div class="bg-white h-fit w-fit absolute right-0 px-3 py-1 flex items-center gap-1 font-bold rounded-bl-3xl">
                                    <span class="material-symbols-outlined text-cYellow">
                                        toll
                                    </span>
                                    <div class="flex justify-center">
                                        <p class="h-fit">{{ $userdata['points'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col justify-center items-center mb-2">
                            <div class="w-fit flex gap-1">
                                <div class="text-2xl font-bold w-fit">@yield('name')</div>
                                @if($userdata['gender'] === 'male')
                                    <div class="flex align-middle">
                                        <span class="material-symbols-outlined self-center scale-[115%]" id="male">
                                            male
                                        </span>
                                    </div>
                                @else
                                    <div class="flex align-middle">
                                        <span class="material-symbols-outlined self-center scale-[115%]" id="female">
                                            female
                                        </span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @yield('userdata')
                </div>
            </div>
            <div class="flex flex-col lg:flex-wrap lg:flex-row w-full lg:w-[70vw] lg:h-[90vh] gap-2 justify-center lg:overflow-scroll" id="post">
                @foreach ($posts as $post)
                    <div class="bg-white shadow-lg rounded-3xl mb-2 lg:w-96 lg:h-fit">
                        <div class="p-3 flex flex-col text-sm gap-1">
                            <div class="flex justify-between">
                                <div class="flex gap-3">
                                    <div class="w-[40px] aspect-square rounded-full overflow-hidden">
                                        <div class="w-full h-full bg-cover" style="background-image: url('/assets/profile1.png')"></div>
                                    </div>
                                    <div>
                                        {{-- {{ var_dump($post) }} --}}
                                        <p class="font-bold">{{ $post->username }}</p>
                                        <p class="italic text-cDarkGrey">{{ date_create($post->updated_at)->format('l, d M Y') }}</p>
                                    </div>
                                </div>
                                <div class="w-fit">
                                    @if($post->type == 1)
                                        <p class="bg-cBlue text-white px-2 rounded-full font-bold">WORKOUT</p>
                                    @else
                                        <p class="bg-cGreen text-white px-2 rounded-full font-bold">DIET</p>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <p>has completed "{{ $post->name }}"</p>
                            </div>
                        </div>
                        <div class="aspect-[4/3] bg-cover bg-center rounded-3xl" style="background-image: url('/assets/post1.png')"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
