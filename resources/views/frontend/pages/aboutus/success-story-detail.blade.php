@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | Success Story'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex ">
                <h1 class="">Our Sucess Story</h1>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <ol>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li style="color: #fff;">Our Success Story</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->

    <section class="message">
        <div class="container">
            <div class="section-title mb-4">
                <h2 class="text-center">Our Sucess Story</h2>
            </div>
            <div class="row">

                <div class="col-12 text-center">
                    <img src="{{asset($success->profile)}}" style="max-width: 120px;border-radius: 50%; margin: auto" alt="">
                    <h5 class="pt-1">{{$success->name}}</h5>
                    <p class="text-justify mt-3">
                        {!! nl2br($success->description) !!}
                    </p>
                </div>


            </div>
        </div>
    </section>


@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/success-story.css')}}" class="">
@endpush
