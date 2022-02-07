@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | Message From Chairman'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex ">
                <h1 class="">Message from Chairman</h1>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <ol>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li style="color: #fff;">Chairman Message</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->

    <section class="message">
        <div class="container">
            <!-- <div class="section-title">
              <h2 class="">Message from Principal</h2>
            </div> -->

            <div class="row">
                <div class="col-lg-12">

                    <div class="message-content">
                        <div class="cover-img" style="max-width: 42%">
                            <img src="{{$data->chairman_image}}" alt="" class="img-fluid float-left mr-4 mb-2">
                        </div>
                        <h5 class="">Message From Chairman</h5>
                        <p class="text-justify">{!! nl2br($data->chairman_content) !!}</p>
                    </p>
                </div>

            </div>

        </div>
    </section>

@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">
@endpush
