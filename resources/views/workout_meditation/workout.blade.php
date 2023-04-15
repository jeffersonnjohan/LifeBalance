@extends('../master')

@section('body')
    {{-- Kotak Biru Atas --}}
    <div class="w-full h-[350px] p-10 pt-16 bg-cBlue rounded-b-[50px]">
        <h1 class="text-3xl text-white">Workout Yuk!</h1>
        <h2>Categories</h2>

        {{-- Category Container --}}
        <div class="w-80% h-[160px] flex mt-5 justify-between mb-5">
            {{-- Category Satuan --}}
            {{-- Class selected --}}
            <div class="w-[48%] h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden activeCategory">
                {{-- Image Atas --}}
                <div class="h-[65%] w-full bg-cover" style="background-image: url('/assets/olahragaCategory.png')">
                </div>
                <p class="text-center text-white mt-3">Olahraga</p>
            </div>
            {{-- Category Satuan --}}
            <div class="w-[48%] h-full flex flex-col bg-cDarkBlue rounded-3xl overflow-hidden">
                {{-- Image Atas --}}
                <div class="h-[65%] w-full bg-cover" style="background-image: url('/assets/meditasiCategory.png')">
                </div>
                <p class="text-center text-white mt-3">Meditasi</p>
            </div>
        </div>

        {{-- Card Plan --}}
        <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl shadow relative mb-4 shadow-lg">
            {{-- Section Kiri --}}
            <div class="w-[70%]">
                <h2 class="text-xl">BURN FAT IN 7 DAYS!</h2>
                <p class="text-sm">Workout Program (Results in 1 week) include..</p>

                
                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                        toll
                    </span>
                    5 points will be added!
                </p>
                <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
            </div>
            {{-- Section Kanan --}}
            <div class="w-[30%] h-full flex justify-center items-center">
                {{-- Image --}}
                <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                    
                </div>
            </div>
        </div>
        {{-- Card Plan --}}
        <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl shadow relative mb-4 shadow-lg">
            {{-- Section Kiri --}}
            <div class="w-[70%]">
                <h2 class="text-xl">BURN FAT IN 7 DAYS!</h2>
                <p class="text-sm">Workout Program (Results in 1 week) include..</p>

                
                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                        toll
                    </span>
                    5 points will be added!
                </p>
                <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
            </div>
            {{-- Section Kanan --}}
            <div class="w-[30%] h-full flex justify-center items-center">
                {{-- Image --}}
                <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                    
                </div>
            </div>
        </div>
        {{-- Card Plan --}}
        <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl shadow relative mb-4 shadow-lg">
            {{-- Section Kiri --}}
            <div class="w-[70%]">
                <h2 class="text-xl">BURN FAT IN 7 DAYS!</h2>
                <p class="text-sm">Workout Program (Results in 1 week) include..</p>

                
                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                        toll
                    </span>
                    5 points will be added!
                </p>
                <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
            </div>
            {{-- Section Kanan --}}
            <div class="w-[30%] h-full flex justify-center items-center">
                {{-- Image --}}
                <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                    
                </div>
            </div>
        </div>
        {{-- Card Plan --}}
        <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl shadow relative mb-4 shadow-lg">
            {{-- Section Kiri --}}
            <div class="w-[70%]">
                <h2 class="text-xl">BURN FAT IN 7 DAYS!</h2>
                <p class="text-sm">Workout Program (Results in 1 week) include..</p>

                
                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                        toll
                    </span>
                    5 points will be added!
                </p>
                <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
            </div>
            {{-- Section Kanan --}}
            <div class="w-[30%] h-full flex justify-center items-center">
                {{-- Image --}}
                <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                    
                </div>
            </div>
        </div>
        {{-- Card Plan --}}
        <div class="max-w-sm px-3 py-6 flex bg-white rounded-3xl shadow relative mb-4 shadow-lg">
            {{-- Section Kiri --}}
            <div class="w-[70%]">
                <h2 class="text-xl">BURN FAT IN 7 DAYS!</h2>
                <p class="text-sm">Workout Program (Results in 1 week) include..</p>

                
                <p class="text-sm text-cYellow flex items-center">
                    <span class="material-symbols-outlined inline-block text-cYellow mr-1">
                        toll
                    </span>
                    5 points will be added!
                </p>
                <span class="w-[60px] h-[40px] rounded-bl-3xl rounded-tr-3xl bg-cRed absolute top-0 right-0 text-white flex justify-center items-center text-2xl">#1</span>
            </div>
            {{-- Section Kanan --}}
            <div class="w-[30%] h-full flex justify-center items-center">
                {{-- Image --}}
                <div class="w-[90%] rounded-md border border-cBlue aspect-square bg-center bg-cover" style="background-image:url('/assets/planImage.png')">
                    
                </div>
            </div>
        </div>
        
    </div>
@endsection