@extends('layout.base')

@section('title', 'Hotel Casino Plaza Home')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<style>
button.cta-main-button {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    background: #5E6C2C;/* Main */
    font-family: "Montserrat", sans-serif;
    box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    border: none;
}

button.cta-main-button:after {
    content: " ";
    width: 0%;
    height: 100%;
    background: #FFD401;
    position: absolute;
    transition: all 0.4s ease-in-out;
    right: 0;
}

button.cta-main-button:hover::after {
    right: auto;
    left: 0;
    width: 100%;
}

button.cta-main-button span {
    text-align: center;
    text-decoration: none;
    width: 100%;
    padding: 18px 25px;
    color: #fff;
    font-size: 1.125em;
    font-weight: 700;
    letter-spacing: 0.3em;
    z-index: 20;
    transition: all 0.3s ease-in-out;
}

button.cta-main-button:hover span {
    color: #5E6C2C;
    animation: scaleUp 0.3s ease-in-out;
}

@keyframes scaleUp {
    0% {
    transform: scale(1);
    }

    50% {
    transform: scale(0.95);
    }

    100% {
    transform: scale(1);
    }
}

</style>
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

    const swiper1 = new Swiper("#coments-carousel", {
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        loop: true,
        slidesPerView: 1,
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
        },
        spaceBetween: 30,
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