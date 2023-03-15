@extends('layout.base')

@section('content')

    @include('front.rooms.sections.room-cards')

@endsection

@section('styles')

{{-- Owl Carousel --}}
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.default.min.css') }}">


@endsection

@section('scripts')

{{-- Menu --}}
<script>
    const aside = document.querySelector('#aside');
    const lateralMenu = document.querySelector('#lateral-menu');
    function closeNav(){
        aside.classList.remove('w-full');
        document.body.classList.remove('overflow-hidden');
        lateralMenu.classList.remove('w-72');
        lateralMenu.classList.add('w-0');
    }
    function openNav(){
        aside.classList.add('w-full');
        document.body.classList.add('overflow-hidden');
        lateralMenu.classList.add('w-72');
        lateralMenu.classList.remove('w-0');
    
    }
</script>

@endsection