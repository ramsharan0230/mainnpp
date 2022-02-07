@extends('frontend.layouts.master')

@section('meta_title',(get_setting('title').' | Mission & Vision'))
@section('meta_description',get_setting('meta_description'))
@section('meta_keywords',get_setting('meta_keywords'))

@section('content')
    <section id="hero">
        <div class="hero-container">
            <div class="carousel-container">
                <div class="carousel-content container">
                    <div class="hero-title">
                        <h1 class="text-center">Vision & Mission </h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{asset($mission->our_mission_image_path)}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6  content " data-aos="fade-up" data-aos-delay="100">
                        <div class="section-header">

                        </div>

                        <div class="d-flex justify-content-between mission-box ">
                            <div class="icon-menu mr-5">
                                <img src="{{asset($mission->icon_path1)}}" alt="" class="">
                            </div>
                            <div class="about-body">
                                <p class="">
                                    {!! nl2br($mission->content1) !!}
                                </p>
                            </div>


                        </div>

                        <div class="d-flex justify-content-between mission-box mt-3  ">
                            <div class="icon-menu mr-5">
                                <img src="{{asset($mission->icon_path2)}}" alt="" class="">
                            </div>
                            <div class="about-body">
                                <p class="">
                                    {!! nl2br($mission->content2) !!}
                                </p>
                            </div>


                        </div>
                        <div class="d-flex justify-content-between mission-box mt-3  ">
                            <div class="icon-menu mr-5">
                                <img src="{{asset($mission->icon_path3)}}" alt="" class="">
                            </div>
                            <div class="about-body">
                                <p class="">
                                    {!! nl2br($mission->content3) !!}

                                </p>
                            </div>






                        </div>


                    </div>
                </div>

            </div>
        </section><!-- End About Section -->




    </main><!-- End #main -->
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">
@endpush
