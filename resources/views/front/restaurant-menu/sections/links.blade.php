<section class="bg-pattern-food">

    <div class="flex justify-center items-center flex-col pt-16">
        <a href="{{ route('home') }}">    
            <div class="w-40">
                <img class="w-full" src="{{ asset('assets/logo.png') }}" alt="Logo Ronda Minerva">
            </div>
        </a>
            
        <div>
            <h1 class="font-bold text-3xl text-center mb-4">Hotel Casino Plaza - Menu Restaurante Los Alcatraces</h1>
            <h2 class="font-bold text-center">Bienvenido / Welcome</h2>
        </div>
    </div>

    <div class="px-4 flex flex-col items-center pb-16">

        @if (request()->has('menu_type') && request()->get('menu_type') == 'room_service')
        <a target="_blank" href="{{ asset('restaurante/menu-los-alcatraces-room-service.pdf') }}" class="bg-white flex items-center my-5 py-4 px-2 sm:px-4 rounded-full shadow-card-hard sm:w-[29.25rem] w-[20.5rem]">
            <div class="w-[4.5rem]">
                <img class="w-full fiil-main-altern" src="{{ asset('assets/icons/fork-knife-outlined.svg') }}" alt="Logo restaurant">
            </div>
            <div class="ml-2 sm:ml-6">
                <h2 class="sm:text-sm uppercase font-medium">Menu</h2>
                <p class="text-xs">Mira nuestro menu de comidas dando click <span class="text-main-altern">aqui</span> y podrás conocer nuestros deliciosos platillos.</p>
            </div>
        </a>     
        @else
        <a target="_blank" href="{{ asset('restaurante/menu-los-alcatraces.pdf') }}" class="bg-white flex items-center my-5 py-4 px-2 sm:px-4 rounded-full shadow-card-hard sm:w-[29.25rem] w-[20.5rem]">
            <div class="w-[4.5rem]">
                <img class="w-full fiil-main-altern" src="{{ asset('assets/icons/fork-knife-outlined.svg') }}" alt="Logo restaurant">
            </div>
            <div class="ml-2 sm:ml-6">
                <h2 class="sm:text-sm uppercase font-medium">Menu</h2>
                <p class="text-xs">Mira nuestro menu de comidas dando click <span class="text-main-altern">aqui</span> y podrás conocer nuestros deliciosos platillos.</p>
            </div>
        </a>
        @endif

        <a target="_blank" href="{{ asset('restaurante/menu-los-alcatraces-bebidas.pdf') }}" class="bg-white flex items-center my-5 py-4 px-2 sm:px-4 rounded-full shadow-card-hard sm:w-[29.25rem] w-[20.5rem]">
            <div class="w-[4.5rem]">
                <img class="w-full fiil-main-altern" src="{{ asset('assets/icons/glass-citrus-outlined.svg') }}" alt="Logo restaurant">
            </div>
            <div class="ml-2 sm:ml-6">
                <h2 class="sm:text-sm uppercase font-medium">Menu de bebidas</h2>
                <p class="text-xs">Conoce las bebidas que tenemos para ti dando click <span class="text-main-altern">aqui</span>.</p>
            </div>
        </a>

        <a target="_blank" href="https://www.facebook.com/CasinoPlazaHotel" class="bg-white flex items-center my-5 py-4 px-2 sm:px-4 rounded-full shadow-card-hard sm:w-[29.25rem] w-[20.5rem]">
            <div class="w-[4.5rem]">
                <img class="w-full" src="https://rondaminervahotel.com/assets/icons/socials/facebook-color.svg" alt="Logo restaurant">
            </div>
            <div class="ml-2 sm:ml-6">
                <h2 class="sm:text-sm uppercase font-medium">¡Siguenos!</h2>
                <p class="text-xs">Recuerda seguirnos en redes sociales, y descubre todos los servicios que tenemos para ti.</p>
            </div>
        </a>
    
    </div>

</section>