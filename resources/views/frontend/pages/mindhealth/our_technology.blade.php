@extends('frontend.layouts.master')

@section('meta_title',(get_setting('title').' | Our Technology'))
@section('meta_description',get_setting('meta_description'))
@section('meta_keywords', get_setting('meta_keywords'))

@section('content')

    <section id="hero">
        <div class="hero-container">


            <div class="carousel-container">
                <div class="carousel-content container">
                    <div class="hero-title">
                        <h1 class="text-center">Our Technologies </h1>
                    </div>



                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">


                <h2 class="text-center mb-4">Brain Tape </h2>


                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{asset($brain_tape->cover_image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6  content " data-aos="fade-up" data-aos-delay="100">
                        <div class="section-header">

                        </div>

                        <div class="d-flex justify-content-between mission-box ">
                            <div class="icon-menu mr-5">

                            </div>
                            <div class="about-body">
                                <p class="">
                                    {!! nl2br($brain_tape->content) !!}
                                </p>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <h2 class="text-center">Bio-well </h2>

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{asset($bio_well->cover_image)}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6  content " data-aos="fade-up" data-aos-delay="100">
                        <div class="section-header">

                        </div>

                        <div class="d-flex justify-content-between mission-box ">
                            <div class="icon-menu mr-5">

                            </div>
                            <div class="about-body">
                                <p class="">
                                    {!! nl2br($bio_well->content) !!}
                                </p>
                            </div>


                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->


        <div id="clients" class="clients ">
            <div class="container">
                <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

                    <div class=" col-md-12 col-lg-12">
                        <div class="client-logo">
                            <img src="{{asset($bio_well->how_bio_well_works)}}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12">
                        <div class="client-logo">
                            <img src="{{asset($bio_well->bio_well_process)}}" class="img-fluid" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- End Clients Section -->


    </main><!-- End #main -->
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">

@endpush
