{{-- Navbar --}}
<div class="h-[80px] w-full flex justify-evenly items-center bg-cLightGrey shadow-lg fixed bottom-0 rounded-t-3xl text-cDarkGrey">
    {{-- Class activeNavbar kalau active --}}
    <a href="/home" class="material-symbols-outlined iconNavbar {{ $active == 'home' ? 'text-cRed': '' }}">
        home
    </a>
    <a href="#" class="material-symbols-outlined iconNavbar {{ $active == 'workout' ? 'text-cBlue' : '' }}">
        directions_run
    </a>
    <a href="#" class="material-symbols-outlined iconNavbar {{ $active == 'diet' ? 'text-cGreen' : ''}}">
        local_fire_department
    </a>
    <a href="#" class="material-symbols-outlined iconNavbar {{ $active == 'challenge' ? 'text-cOrange' : ''}}">
        workspace_premium
    </a>
    <a href="#" class="material-symbols-outlined iconNavbar {{ $active == 'history' ? 'text-cRed' : ''}}">
        history
    </a>
</div>
