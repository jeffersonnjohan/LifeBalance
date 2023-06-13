{{-- Admin Page's Navbar --}}
<div class="lg:fixed lg:flex lg:h-fit lg:w-fit lg:items-center lg:translate-y-[-50%] lg:top-[50%] lg:-right-10 duration-300 ease-out lg:-translate-x-12" id="navbar">
    <button class="bg-white rounded-3xl py-3 w-[75px] lg:flex hidden hover:bg-cDarkGrey hover:text-white duration-200 ease-out hover:-translate-x-1 shadow-lg" onclick="navbarpopup()">
        <div class="material-symbols-outlined iconNavbar rotate-180" id="arrow">
            chevron_left
        </div>
    </button>
    <div class="h-[80px] w-full flex justify-evenly items-center bg-white shadow-lg fixed bottom-0 rounded-t-3xl text-cDarkGrey lg:flex-col lg:w-fit lg:h-fit lg:p-6 lg:gap-7 lg:relative lg:-ml-10 lg:rounded-3xl">
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
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    console.log('ini dari navbar')
    x = 1
    console.log(x)
    function navbarpopup() {
        if (x == 0) {
            x = 1
            console.log(x)
            $(document).ready(function() {
                $("#arrow").addClass("rotate-180")
                $("#navbar").removeClass("lg:translate-x-[50px]")
            });
        } else {
            x = 0
            console.log(x)
            $(document).ready(function() {
                $("#arrow").removeClass("rotate-180")
                $("#navbar").addClass("lg:translate-x-[50px]")
            });
        }
    }
</script>
