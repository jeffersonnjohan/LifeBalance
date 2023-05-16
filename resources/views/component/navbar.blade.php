{{-- Navbar --}}
<div class="lg:fixed lg:flex lg:h-fit lg:w-fit lg:items-center lg:translate-y-[-50%] lg:top-[50%] lg:-right-10 duration-300 ease-out lg:-translate-x-12" id="navbar">
    <button class="bg-white rounded-3xl py-3 w-[75px] flex hover:bg-cDarkGrey hover:text-white duration-200 ease-out hover:-translate-x-1 shadow-lg" onclick="navbarpopup()">
        <div class="material-symbols-outlined iconNavbar rotate-180" id="arrow">
            chevron_left
        </div>
    </button>
    <div class="h-[80px] w-full flex justify-evenly items-center fixed bottom-0 bg-white shadow-lg rounded-t-3xl text-cDarkGrey lg:flex-col lg:w-fit lg:h-fit lg:p-6 lg:gap-7 lg:relative lg:-ml-10 lg:rounded-3xl">
        {{-- Class activeNavbar kalau active --}}
        <a href="/home" class="material-symbols-outlined iconNavbar {{ $active == 'home' ? 'text-cRed': '' }} hover:scale-[115%] duration-200 ease-out">
            home
        </a>
        <a href="/workouts" class="material-symbols-outlined iconNavbar {{ $active == 'workout' ? 'text-cBlue' : '' }} hover:scale-[115%] duration-200 ease-out">
            directions_run
        </a>
        <a href="/diets" class="material-symbols-outlined iconNavbar {{ $active == 'diet' ? 'text-cGreen' : ''}} hover:scale-[115%] duration-200 ease-out">
            local_fire_department
        </a>
        <a href="/challenges" class="material-symbols-outlined iconNavbar {{ $active == 'challenge' ? 'text-cOrange' : ''}} hover:scale-[115%] duration-200 ease-out">
            workspace_premium
        </a>
        <a href="/history" class="material-symbols-outlined iconNavbar {{ $active == 'history' ? 'text-cRed' : ''}} hover:scale-[115%] duration-200 ease-out">
            history
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
