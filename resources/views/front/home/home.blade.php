@extends('layout.base')

@section('title', 'Home')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
    const swiper3 = new Swiper("#hero-carousel", {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        parallax: true,
        loop: true,
        spaceBetween: 30,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    </script>
@endsection

@section('content')
    <div>
        @include('front.home.sections.hero')

        @include('front.home.sections.about')

        @include('front.home.sections.rooms')

        @include('front.home.sections.services')

        @include('front.home.sections.comments')
    </div>
@endsection