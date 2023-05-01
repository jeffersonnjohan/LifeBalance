{{-- Admin Page's Navbar --}}
<div class="h-[80px] w-full flex justify-evenly items-center bg-white shadow-lg fixed bottom-0 rounded-t-3xl text-cDarkGrey">
    {{-- Workout --}}
    <a href="/admin/workout" class="material-symbols-outlined iconNavbar {{ $active == 'adminpage.listWorkout' ? 'text-cBlue' : '' }}">
        directions_run
    </a>
    {{-- Diet --}}
    <a href="/admin/diet" class="material-symbols-outlined iconNavbar {{ $active == 'adminpage.listDiet' ? 'text-cGreen' : ''}}">
        local_fire_department
    </a>
    {{-- Challenges --}}
    <a href="/admin/challenges" class="material-symbols-outlined iconNavbar {{ $active == 'adminpage.listChallenges' ? 'text-cOrange' : ''}}">
        workspace_premium
    </a>
</div>
