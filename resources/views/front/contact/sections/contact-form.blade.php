<section class="lg:col-span-4">

    <div class="w-full mx-auto px-4 sm:px-16 text-center">

        <div class="space-y"></div>

        <form action="{{route('contact.send')}}" method="POST" class="mx-auto">
            @csrf
            @method('POST')
            <div class="lg:flex lg:justify-between lg:gap-8">
                <div class="lg:w-1/2">
                    <input class="border-0 border-b w-full focus:ring-0 py-3 px-0"  name="name" type="text" placeholder="Nombre">
                </div>
                <div class="space-y lg:hidden"></div>
                <div class="lg:w-1/2">
                    <input class="border-0 border-b w-full focus:ring-0 py-3 px-0" name="email" type="email" placeholder="Email">
                </div>
            </div>
            <div class="space-y"></div>
            <div>
                <input class="border-0 border-b w-full focus:ring-0 py-3 px-0" name="subject" type="text" placeholder="Subject">
            </div>
            <div class="space-y"></div>
            <div>
                <textarea class="border-0 border-b w-full focus:ring-0 py-3 px-0 mt-4" name="message" id="" placeholder="Mensaje"></textarea>
            </div>

            <div class="text-left">
                <div class="space-y"></div>
                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                <div class="space-y-sm"></div>
            </div>

        </form>
    </div>

</section>