<nav>
    <div class="flex justify-between items-center px-8 py-2 md:py-1 bg-white h-[60px] border-b-2 border-b-main max-w-screen-2xl mx-auto">
        <div class="flex items-center gap-4">
            <div class="hidden md:inline cursor-pointer" data-open-nav id="openNavBtn">
                <img class="w-10" src="{{ asset('assets/icons/menu.svg') }}" alt="menu">
            </div>
            <a  href="{{ route('home') }}">
                <img class="h-14" src="{{asset('assets/logo.png')}}" alt="Logo Hotel Casino Plaza Navbar">
            </a>
        </div>
        <div class="md:hidden block" data-open-nav id="openNavBtnMovile">
            <img src="{{ asset('assets/icons/menu.svg') }}" alt="menu">
        </div>
        <div class="hidden md:block bg-main rounded-xl">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=523313659752&text=Hola%20me%20gustaria%20comunicarme%20con%20alguiendel%20hotel." class="bg-main h-12 w-12 p-1 rounded-xl block">
                <img class="w-full h-full" src="{{ asset('assets/icons/whatsapp.svg') }}" alt="menu">
            </a>
        </div>
    </div>
</nav>