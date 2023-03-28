<section class="lg:col-span-4">

    <div class="w-full mx-auto px-4 sm:px-16 text-center">

        <div class="space-y"></div>

        <form action="{{route('event.contact.send')}}" method="POST" class="mx-auto">
            @csrf
            @method('POST')
            <div class="lg:flex lg:justify-between lg:gap-8">
                <div class="lg:w-1/2 text-left">
                    <label for="name" class="text-black opacity-0 capitalize duration-300" id="nameLabel">Nombre</label>
                    <input class="without-ring border-0 border-b w-full focus:ring-0 py-3 px-0 text-left"  name="name" type="text" placeholder="Nombre" id="name" value="{{old('name')}}">
                </div>
                <div class="spacing-1"></div>
                <div class="lg:w-1/2 text-left">
                    <label for="email" class="text-black opacity-0 capitalize duration-300">Correo Electronico</label>
                    <input class="without-ring border-0 border-b w-full focus:ring-0 py-3 px-0" name="email" type="email" placeholder="Correo electronico" id="email" value="{{old('email')}}">
                </div>
            </div>
            <div class="spacing-1"></div>
            <div class="lg:flex lg:justify-between lg:gap-8">
                <div class="lg:w-1/2 text-left">
                    <label for="phone" class="text-black opacity-0 capitalize duration-300">Telefono de contacto</label>
                    <input class="without-ring border-0 border-b w-full focus:ring-0 py-3 px-0"  name="phone" type="text" placeholder="Telefono de contacto" id="phone" value="{{old('phone')}}">
                </div>
                <div class="spacing-1"></div>
                <div class="lg:w-1/2 text-left">
                    <label for="date" class="text-black opacity-50 capitalize">Fecha del evento</label>
                    <input class="without-ring border-0 border-b w-full focus:ring-0 py-3 px-0" name="event_date" type="date" placeholder="fecha del eventos" value="{{old('event_date')}}">
                </div>
            </div>
            <div class="spacing-1"></div>
            <div class="lg:flex lg:justify-between lg:gap-8">
                <div class="lg:w-1/2 text-left">
                    <label for="event_guests" class="text-black opacity-0 capitalize duration-300">Numero de asistentes</label>
                    <input class="border-0 border-b w-full focus:ring-0 py-3 px-0"  name="event_guests" type="text" placeholder="Numero de asistentes" id="event_guests" value="{{old('event_guests')}}">
                </div>
            </div>
            <div class="spacing-1"></div>
            <div>
                <textarea class="border-0 border-b w-full focus:ring-0 py-3 px-0 mt-4" name="message" id="message" placeholder="Mensaje">{{old('message')}}</textarea>
                <label for="message" class="text-black opacity-0 capitalize">mensaje</label>
            </div>

            <div class="text-left">
                <div class="space-y"></div>
                <button class="h-12 w-36 bg-main text-white text-sm font-bold">Reservar Ahora</button>
                <div class="space-y-sm"></div>
            </div>

        </form>
    </div>

</section>

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
@endsection
@section('js')
<!-- Toastify -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
@if ($errors->any())
    @foreach ($errors->all() as $error)
    Toastify({
        text: "{{ $error }}",
        duration: 3000,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "center", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
            background: "linear-gradient(to right, #5E6C2C, #3E490F)",
        },
        onClick: function(){} // Callback after click
    }).showToast();
    @endforeach
@endif

@if (session()->has('success'))

Swal.fire(
  '¡Gracias!',
  'Se ha realizado correctamente tu solicitud!',
  'success'
)
    
@endif
</script>
<!-- /Toastify -->

<script>
    function toggleInputLabel() {
        const inputs = document.querySelectorAll('input, textarea');
        inputs.forEach(input => {
            input.addEventListener('keyup', () => {
                const label = (input?.id) ? document.querySelector(`label[for=${input.id}]`) : document.createElement('label');
                if(input.value.length > 0)
                {
                    label.classList.remove('opacity-0');
                    label.classList.add('opacity-50');
                }
                else
                {
                    label.classList.remove('opacity-50');
                    label.classList.add('opacity-0');
                }
            });
        });
    }

    toggleInputLabel();
</script>

@endsection