<nav>
    <div class="flex justify-between items-center px-8 py-2 md:py-1 bg-white h-[60px] border-b-2 border-b-main">
        <div class="flex items-center gap-4">
            <div class="hidden md:inline cursor-pointer" data-open-nav onclick="openNav()">
                <img class="w-10" src="{{ asset('assets/icons/menu.svg') }}" alt="menu">
            </div>
            <a href="{{ route('home') }}">
                <img class="h-14" src="{{asset('assets/logo.png')}}" alt="Logo Hotel Country Navbar">
            </a>
        </div>
        <div class="md:hidden block" data-open-nav onclick="openNav()">
            <img src="{{ asset('assets/icons/menu.svg') }}" alt="menu">
        </div>
        <div class="hidden md:block bg-main rounded-xl">
            <a href="#" class="bg-main h-12 w-12 p-1 rounded-xl block">
                <img class="w-full h-full" src="{{ asset('assets/icons/whatsapp.svg') }}" alt="menu">
            </a>
        </div>
    </div>
</nav>