@extends('layout.base')

@section('content')
    <div>
        @include('front.home.sections.hero')

        @include('front.home.sections.about')

        @include('front.home.sections.rooms')

        @include('front.home.sections.services')

        @include('front.home.sections.comments')
    </div>
@endsection