@extends('master')

@section('title', 'History')

@section('style')
    {{-- <style>
        * {
            border: red solid 0.5px;
        }
    </style> --}}
@endsection

@section('body')
    <div class="bg-cLightGrey h-full w-full">
        <x-back-get hover-bg="bg-cRed" backlink="{{ url()->previous() }}"/>

        {{-- Bar --}}
        <?php $temp = array(); ?>
        <div class="lg:flex w-full h-screen">
        <div class="text-white mt-16 bg-cRed lg:rounded-l-[0px] lg:rounded-tr-[50px] p-2 lg:w-1/3 ">
                <h2 class="m-2 pb-0 text-lg">Unfinished Plan!</h2>
                <div class="lg:overflow-auto lg:h-[90%] ">
                    @forelse ($enrollments as $enrollment)
                        @if ($enrollment->is_done == 0)
                            {{-- show unfinished plan--}}
                            <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-cRed shadow-lg">
                                <div class="w-8 h-[70px] {{ $enrollment->is_diet == 1 ? 'bg-cGreen': 'bg-cBlue'}} rounded-bl-3xl rounded-tl-3xl"></div>
                                <div class="self-center p-2 h-full w-full">
                                    <h3>{{ $enrollment->name }}</h3>
                                    <h4>{{ $enrollment->day_count - $enrollment->finished_day . ' days left!'}}</h4>
                                </div>
                            </div>
                        @else
                            {{-- saved temporary --}}
                            <?php $temp[] = $enrollment;?>
                        @endif
                    @empty
                    <div class="h-full w-full flex justify-center items-center">
                        <h2 class="text-lg">No History</h2>
                    </div>
                    @endforelse
                </div>
            </div>
            <div class=" pb-20 lg:pb-2 lg:pt-2 lg:mx-2 lg:my-16 lg:w-2/3 lg:overflow-auto">
                    <h2 class="m-2 pb-0 text-lg">Finished Plan</h2>
                    @forelse ($temp as $temp)
                    <div class="bg-white m-2 text-md rounded-3xl flex flex-row text-black shadow-lg">
                        <div class="w-8 h-[70px] {{ $temp->is_diet == 1 ? 'bg-cGreen': 'bg-cBlue'}} rounded-bl-3xl rounded-tl-3xl"></div>
                        <div class="self-center p-2 h-full w-full">
                            <h3 class="text-lg font-bold">{{ $temp->name }}</h3>
                            <h4 class="text-md {{ $temp->is_diet == 1 ? 'text-cGreen' : 'text-cBlue'}}">{{ \Carbon\Carbon::parse($enrollment->updated_at)->format('d M, Y') }}</h4>
                        </div>
                        <div class="flex flex-row items-center p-2 mr-2">
                            <span class="material-symbols-outlined text-cYellow">
                                toll
                            </span>
                            <h3 class="font-medium text-md">{{ $temp->points }}</h3>
                        </div>
                    </div>
                    @empty
                    <div class="h-full w-full flex justify-center items-center">
                        <h2 class="text-lg">No History</h2>
                    </div>
                    @endforelse
            </div>
        </div>

    </div>
    <x-navbar active="history" admin="false"/>
@endsection
