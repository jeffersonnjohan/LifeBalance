@extends('../master')

@section('body')
    {{-- Kotak Biru Atas --}}
    <div class="w-full h-[350px] p-10 pt-16 bg-cBlue rounded-b-[50px]">
        <h1 class="text-3xl text-white">Workout Yuk!</h1>
        <h2>Categories</h2>

        {{-- Category Container --}}
        <div class="w-80% h-[160px] flex mt-5 bg-cOrange justify-between">
            {{-- Category Satuan --}}
            <div class="w-[48%] h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden">
                {{-- Image Atas --}}
                <div class="h-[65%] w-full bg-cover" style="background-image: url('/assets/olahragaCategory.png')">
                </div>
                <p>Olahraga</p>
            </div>
        </div>
    </div>
@endsection