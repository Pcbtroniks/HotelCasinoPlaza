<footer>

    <div class="bg-main relative py-20 px-4 flex md:flex-row md:px-6 sm:justify-center flex-col items-center gap-24">

        <div>
            <img src="{{ asset('assets/logo.png') }}" alt="Logo Country Hotel">
        </div>

        <div class="sm:order-3">
            <ul class="grid grid-cols-2 gap-7">
                <li><a target="_blank" href="https://api.whatsapp.com/send?phone=523313659752&text=Hola%20me%20gustaria%20comunicarme%20con%20alguien%20del%20hotel."><img src="{{ asset('assets/icons/socials/WhatsApp Inc.svg') }}" alt="WhatsApp"></a></li>
                <li><a target="_blank" href="https://www.facebook.com/CasinoPlazaHotel"><img src="{{ asset('assets/icons/socials/Facebook.svg') }}" alt="Facebook"></a></li>
                <li class="col-span-2 mx-auto"><a href="javascript:void(0)"><img src="{{ asset('assets/icons/socials/Instagram.svg') }}" alt="Instagram"></a></li>
            </ul>
        </div>

        <div class="sm:w-[335px] px-3 text-white">
            <h4>Información de contacto</h4>

            <div class="space-y"></div>

            <div class="flex flex-col gap-16 text-left font-bold">
                <a class="flex gap-2" href="tel:+523336140223">
                    <img src="{{ asset('assets/icons/call-outline.svg') }}" alt="Location Icon">
                    <span>+52 (33) 3614 0223 </span>
                    <br>
                    <span>3614 0224</span>
                </a>
                <a class="flex gap-2" href="mailto:reservaciones@hotelcasinoplaza.mx">
                    <img src="{{ asset('assets/icons/services/mail-outline.svg') }}" alt="Location Icon">
                    <span>reservaciones@hotelcasinoplaza.mx</span>
                </a>
                <a class="flex gap-2" href="#">
                    <img src="{{ asset('assets/icons/location-outline.svg') }}" alt="Location Icon">
                    <span>
                        Pedro Moreno 726 Centro Histórico C.P. 44100
                        Guadalajara Jalisco, México
                    </span>
                </a>
            </div>
        </div>

    </div>

    <div class="bg-acent p-4">

        <ul class="text-gray font-bold flex flex-wrap gap-2 justify-center">
            <li><a href="{{route('home')}}">Inicio</a></li>
            <li><a href="{{route('installations')}}">Instalaciones</a></li>
            <li><a href="{{route('rooms')}}">Habitaciones</a></li>
            <li><a href="{{route('services')}}">Servicios</a></li>
            <li><a href="{{route('contact')}}">Contacto</a></li>
        </ul>

    </div>

    <div class="bg-acent p-4 text-center">
        <p class="text-white/50 text-sm">
            &copy; 
            <script>document.write(new Date().getFullYear())</script>
            <noscript>2023</noscript>
            Hotel Casino Plaza. Todos los derechos reservados.
            Powered by <a href="https://pcbtroniks.com" target="_blank" class="font-bold">Pcbtroniks</a>.
        </p>
    </div>

</footer>