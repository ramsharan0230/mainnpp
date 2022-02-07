@extends('frontend.layouts.master')

@section('meta_title',(get_setting('title').' | Mind Health'))
@section('meta_description',get_setting('meta_description'))
@section('meta_keywords', get_setting('meta_keywords'))

@section('content')

    <section id="hero">
        <div class="hero-container">


            <div class="carousel-container">
                <div class="carousel-content container">
                    <div class="hero-title">
                        <h1 class="text-center">Mind Health Vs Mental Health</h1>
                    </div>



                </div>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">






        <section id="features" class="features mt-4 pt-4 mb-4 pb-4">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="section-title">

                </div>
                <div class="row">
                    <div class="col-lg-4 aos-init aos-animate" data-aos="fade-right">

                        <div class="section-title">
                            <h5 class>Mind Health </h5>

                        </div>



                        <div class="chooseus-box mt-5 mt-lg-0">

                            <i class="icofont-first-aid"></i>


                            <p>The concept of Mind is synonymous to intellect in the West.</p>
                        </div>

                        <div class="chooseus-box mt-5">
                            <i class="icofont-first-aid"></i>

                            <p> Mental conditions that are widely spread in the modern world need to find a new approach
                                for treatment and well being.</p>
                        </div>



                    </div>
                    <div class="image col-lg-4 aos-init aos-animate" style="background-image: url({{asset('frontend/assets/img/vs.png')}}); background-size: 80%;
    background-repeat: no-repeat;
    background-position: bottom;" data-aos="zoom-in">
                    </div>

                    <div class="col-lg-4 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-right">

                        <div class="section-title">
                            <h5 class>Mental Health </h5>

                        </div>
                        <div class="chooseus-box mt-5 mt-lg-0">
                            <i class="icofont-first-aid"></i>

                            <p>Over the past 40 years, cognitive research has indicated that the brain itself is
                                intrinsicly interconnected
                                with the rest of the body</p>
                        </div>
                        <div class="chooseus-box mt-5">
                            <i class="icofont-first-aid"></i>

                            <p>We have created a combination of cutting-edge technologies and practical steps to expand
                                awareness and achieve
                                balance and harmony</p>
                        </div>



                    </div>
                </div>
            </div>
        </section>




    </main><!-- End #main -->
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">
@endpush
