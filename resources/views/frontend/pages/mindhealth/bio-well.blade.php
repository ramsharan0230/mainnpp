@extends('frontend.layouts.master')

@section('meta_title',(get_setting('title').' | Bio Well'))
@section('meta_description',get_setting('meta_description'))
@section('meta_keywords', get_setting('meta_keywords'))

@section('content')


    <section id="hero">
        <div class="hero-container">
            <div class="carousel-container">
                <div class="carousel-content container">
                    <div class="hero-title">
                        <h1 class="text-center">Bio Well</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    <main id="main">

        <section class="brain-tape">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <img src="{{asset($bio_well->cover_image)}}" alt="" class="img-fluid">

                    </div>
                    <div class="col-lg-7">
                        <div class="bio-well-describe">
                            <p class="">
                                {!! nl2br($bio_well->content) !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bio-image">
            <div class="container">
                <div class="section-title">
                    <h2 class="">How a Bio Well Works</h2>
                </div>
                <img src="{{asset($bio_well->how_bio_well_works)}}" class="img-fluid" alt="">

                <div class="bio-well-image mt-5">
                    <div class="section-title">
                        <h2 class="">Bio Well Process</h2>
                    </div>
                    <img src="{{asset($bio_well->bio_well_process)}}" class="img-fluid" alt="">
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/brain-tape.css')}}" class="">

@endpush
