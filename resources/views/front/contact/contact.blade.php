@extends('layout.base')

@section('content')

@include('front.contact.sections.contact-tittle')

<main class="lg:grid lg:grid-cols-6">

    @include('front.contact.sections.contact-form')
    
    @include('front.contact.sections.info-box')

</main>

@include('front.contact.sections.map')


@endsection

