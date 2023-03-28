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