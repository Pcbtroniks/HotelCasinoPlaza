<section>
    <div class="p-8 bg-main-light">

        <div class="max-w-7xl mx-auto">
            
            <div class="mb-8">
                
                <h2 class="text-3xl font-bold">
                    Nuestras habitaciones
                </h2>
                <span class="border-b-4 border-main block w-80 my-2"></span>
            </div>
            
            <!-- <div class="md:columns-xs/*[20rem 320px]*/ lg:columns-sm/*[24rem 384px]*/ xl:columns-xl/*[36rem 576px]*/"> -->
            <div class="grid md:grid-cols-2 md:gap-4 justify-between">
                <!--Room Card-->
                <div class="shadow-card card-shadow max-w-[38rem] mx-auto w-full mb-8">
                    
                    <div class="w-full h-[230px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/ejecutiva.jpg')}}" alt="Habitación ejecutiva">
                    </div>
                    
                    <div class="p-6 pb-4 ">
                        
                        <h3 class="font-bold mb-3 text-xl">
                            Ejecutiva Sencilla
                        </h3>
                        
                        <p class="text-sm leading-6">
                            Habitación Ejecutiva Sencilla: Habitación tranquila con una cama queen size, cuenta con la tranquilidad y comodidad que ofrece Casino Plaza a todos los huéspedes, pueden hospedarse hasta 2 personas en esta habitación.
                        </p>
                        
                        <ul class="flex my-3 gap-4">
                            <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        </ul>
                        
                        <div>
                            <div class="space-y md:h-5"></div>
                            <a href="{{route('contact')}}">
                                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                <!--Room Card-->
                <div class="shadow-card card-shadow max-w-[38rem] mx-auto w-full mb-8">
                    
                    <div class="w-full h-[230px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/doble.jpg')}}" alt="Habitación ejecutiva">
                    </div>
                    
                    <div class="p-6 pb-4 ">
                        
                        <h3 class="font-bold mb-3 text-xl">
                            Habitación Ejecutiva Doble
                        </h3>
                        
                        <p class="text-sm leading-6">
                            Con la comodidad de una amplia habitación con dos camas matrimoniales, cuenta con las amenidades necesarias para tener una estancia tranquila y el descanso necesario en tu viaje. Pueden hospedarse hasta 4 personas en esta habitación.
                        </p>
                        
                        <ul class="flex my-3 gap-4">
                            <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        </ul>
                        
                        <div>
                            <div class="space-y md:h-5"></div>
                            <a href="{{route('contact')}}">
                                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>
                <!--Room Card-->
                <div class="shadow-card card-shadow max-w-[38rem] mx-auto w-full mb-8 break-before-column">
                    
                    <div class="w-full h-[230px] overflow-hidden">
                        <img class="w-full h-full object-cover hover:scale-110 transition-transform duration-300" src="{{asset('assets/img/rooms/suite.jpeg')}}" alt="Habitación ejecutiva">
                    </div>
                    
                    <div class="p-6 pb-4 ">
                        
                        <h3 class="font-bold mb-3 text-xl">
                            Suite Ejecutiva
                        </h3>
                        
                        <p class="text-sm leading-6">
                            Para estadías largas o incrementar la comodidad en la perla tapatía, ponemos a su disposición esta habitación que cuenta con un amplio espacio, dos camas matrimoniales y un sofá cama, se recomienda para 3 personas o hasta 5 de ser el caso. 
                        </p>
                        
                        <ul class="flex my-3 gap-4">
                            <li><img src="{{ asset('assets/icons/tv.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/wifi.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/air.png') }}" alt="service"></li>
                            <li><img src="{{ asset('assets/icons/park.png') }}" alt="service"></li>
                        </ul>
                        
                        <div>
                            <div class="space-y md:h-5"></div>
                            <a href="{{route('contact')}}">
                                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                            </a>
                        </div>
                        
                    </div>
                    
                </div>


        </div>
        
    </div>
        
    </div>
</section>