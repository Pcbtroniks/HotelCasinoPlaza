
<section>


    <div class="w-full bg-main-light p-4 sm:px-16 ">

        {{-- Rooms --}}
            <div class="max-w-screen-2xl mx-auto">

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row lg:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="w-full object-cover md:h-72 h-60 lg:h-80" src="{{ asset('assets/img/rooms/ejecutiva.jpg') }}" alt="Habitaciones Hotel Casino Plaza">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">
                        
                        <div>
                            <span class="text-ronda-dark-medium font-bold text-sm uppercase">Instalaciones</span>
                        </div>

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium capitalize">Habitaciones</h2>

                        <div>

                            <p class="text-sm">
                                Te sentirás como en tu propia casa en cualquiera de nuestras habitaciones, diferentes entre sí adaptadas a tus necesidades.
                            </p>


                            <div class="mt-8">
                                <ul class="flex gap-4 md:justify-start justify-around px-2 nth-rm">
                                    <li><img src="{{ asset('assets/icons/tv.png') }}" alt="TV Logo"></li>
                                    <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="Wify Logo"></li>
                                    <li><img src="{{ asset('assets/icons/park.png') }}" alt="Park Logo"></li>
                                </ul>
                            </div>

                        </div>
                        
                        <a class="hidden" target="_blank" href="https://direct-book.com/properties/HotelarboreaDirect">
                            <button class="w-36 h-12 font-bold bg-ronda-orange text-white text-sm">Reservar Ahora</button>
                        </a>

                    </div>

                </div>

                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row-reverse xl:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 lg:overflow-hidden">
                        <picture>
                            <img class="w-full object-cover md:h-72 h-60 lg:h-80" src="{{ asset('assets/img/installations/restarant.jpg') }}" alt="Restaurant Photography">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <div>
                            <span class="text-ronda-dark-medium font-bold text-sm uppercase">RESTAURANTE</span>
                        </div>

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium capitalize">Los Alcatraces</h2>

                        <div>

                            <p class="text-sm">
                                Lunes a Domingo 07:00 a 22:00 hrs
                                <br>
                                Nuestro Restaurante “Los Alcatraces”, cuenta con una amplia variedad de platillos típicos mexicanos y postres para los paladares más exigentes. También podrán disfrutar de diferentes bebidas con y sin alcohol, provenientes de la cava de la casa, donde encontraran el acompañamiento perfecto a sus platillos. 
                                Conozca nuestro <a class="text-[#839226]" href="{{ asset('restaurante/menu-los-alcatraces.pdf') }}" target="_blank">menú de comida</a> y 
                                <a class="text-[#839226]" href="{{ asset('restaurante/menu-los-alcatraces-bebidas.pdf') }}" target="_blank">nuestras bebidas</a>
                            </p>


                            <div class="mt-8">
                                <ul class="flex gap-4 md:justify-start justify-around px-2 nth-rm">
                                    <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="Wifi Logo"></li>
                                    <li><img src="{{ asset('assets/icons/park.png') }}" alt="Park Logo"></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>
                
                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row lg:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 overflow-hidden">
                        <picture>
                            <img class="w-full object-cover md:h-72 h-60 lg:h-80 object-bottom" src="{{ asset('assets/img/installations/salones.jpg') }}" alt="Salon Photography">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <div>
                            <span class="text-ronda-dark-medium font-bold text-sm uppercase">Amplios</span>
                        </div>

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium capitalize">Salones para eventos</h2>

                        <div>

                            <p class="text-sm">
                                Nuestros salones de eventos cuentan con diferentes amenidades para cumplir con las expectativas del evento que esté pensando realizar. Tenemos capacidad de hasta 180 personas en nuestro salón más amplio. <a href="{{ route('event.contact') }}" class=" text-main underline">Cotiza tu evento</a>
                            </p>


                            <div class="mt-8">
                                <ul class="flex gap-4 md:justify-start justify-around px-2 nth-rm">
                                    <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="Wify Logo"></li>
                                </ul>
                            </div>

                        </div>
                        
                        <a class="hidden" target="_blank" href="https://direct-book.com/properties/HotelarboreaDirect">
                            <button class="w-36 h-12 font-bold bg-ronda-orange text-white text-sm">Reservar Ahora</button>
                        </a>

                    </div>

                </div>


                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row-reverse lg:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 overflow-hidden">
                        <picture>
                            <img class="w-full object-cover md:h-72 h-60 lg:h-80 object-bottom" src="{{ asset('assets/img/installations/gym.jpg') }}" alt="Gym Photography">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <div>
                            <span class="text-ronda-dark-medium font-bold text-sm uppercase">Comodo</span>
                        </div>

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium capitalize">Gimnasio</h2>

                        <div>

                            <p class="text-sm">
                                Si es viaje de negocios o de placer, tenemos un gimnasio equipado con todo lo necesario para mantenerse en forma durante su estancia.
                            </p>


                            <div class="mt-8">
                                <ul class="flex gap-4 md:justify-start justify-around px-2 nth-rm">
                                    <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="Wify Logo"></li>
                                </ul>
                            </div>

                        </div>
                        
                        <a class="hidden" target="_blank" href="https://direct-book.com/properties/HotelarboreaDirect">
                            <button class="w-36 h-12 font-bold bg-ronda-orange text-white text-sm">Reservar Ahora</button>
                        </a>

                    </div>

                </div>


                {{-- card --}}

                <div class="card-shadow flex flex-col lg:flex-row lg:max-h-80 xl:h-80 max-w-[1253px] lg:mx-auto my-8">

                    <div class="h-52 lg:h-full min-h-5 basis-1/3 overflow-hidden">
                        <picture>
                            <img class="w-full object-cover md:h-72 h-60 lg:h-80 object-bottom" src="{{ asset('assets/img/installations/centro-negocios.jpg') }}" alt="Business center Photography">
                        </picture>
                    </div>

                    <div class="p-4 sm:p-6 flex flex-col basis-2/3 xl:h-80">

                        <div>
                            <span class="text-ronda-dark-medium font-bold text-sm uppercase">Radiante</span>
                        </div>

                        <h2 class="text-2xl font-bold my-4 sm:my-2 text-dark-medium capitalize">Centro de negocios</h2>

                        <div>

                            <p class="text-sm">
                                Estamos seguros de poder alcanzar sus más altas expectativas, considerando que día a día mejoramos la calidad de nuestros servicios e instalaciones.
                            </p>


                            <div class="mt-8">
                                <ul class="flex gap-4 md:justify-start justify-around px-2 nth-rm">
                                    <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="Wify Logo"></li>
                                </ul>
                            </div>

                        </div>
                        
                        <a class="hidden" target="_blank" href="https://direct-book.com/properties/HotelarboreaDirect">
                            <button class="w-36 h-12 font-bold bg-ronda-orange text-white text-sm">Reservar Ahora</button>
                        </a>

                    </div>

                </div>

            </div>

    </div>


</section>