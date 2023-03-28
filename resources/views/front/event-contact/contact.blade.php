@extends('layout.base')

@section('content')

@include('front.event-contact.sections.contact-tittle')

<main class="lg:grid lg:grid-cols-6">

    @include('front.event-contact.sections.contact-form')
    
    @include('front.event-contact.sections.info-box')

</main>

@include('front.event-contact.sections.map')


@endsection

