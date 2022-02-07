@extends('frontend.layouts.master')
@section('meta_title',(get_setting('title').' | Technology page'))

@section('content')

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex ">
                <h1 class="">Student Speaks</h1>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <ol>
                            <li><a href="index.html">Home</a></li>
                            <li style="color: #fff;">student voice</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">
            <div class="header-title">
                <h2 class="text-center">Student Speaks</h2>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="row">
                       @foreach($testimonials as $item)

                        <div class="col-lg-6 ">
                            <div class="testimonial-wrap border">
                                <div class="testimonial-item">
                                    <img src="{{asset($item->profile)}}" class="testimonial-img img-fluid" alt="{{$item->name}}">
                                    <i class="bx bxs-quote-left quote-icon-left"></i>
                                    {!! nl2br($item->review) !!}
                                    <h3 class="">{{ucfirst($item->name)}}</h3>
                                    <h4 class="">{{$item->designation}}</h4>
                                </div>
                            </div>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->



@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/testinominal.css')}}" class="">
@endpush


