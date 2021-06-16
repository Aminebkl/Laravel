@extends('layouts.app')


@section('content')
    @include('partials.1_header')
    @include('partials.2_hero')
    
        <main id="main">
            @include('partials.3_about')
            @include('partials.4_features')
            @include('partials.5_services')
            @include('partials.6_portfolio')
            @include('partials.7_testimonials')
            @include('partials.8_team')
            @include('partials.9_contact')   
        </main><!-- End #main -->

    @include('partials.10_footer')
@endsection