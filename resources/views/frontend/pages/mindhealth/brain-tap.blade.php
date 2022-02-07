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
                        <h1 class="text-center">Brain Tap</h1>
                    </div>



                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    <main id="main">

        <section class="brain-tape">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <img src="{{asset($brain_tape->cover_image)}}" alt="" class="img-fluid">
                        <div class="brain-tape-description mt-3">
                            <p class="">
                               {!! $brain_tape->content !!}
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <h4 class="">Quick Link</h4>
                        <div class="quick-link-list">
                            <ul>
                                <li>
                                    <a href="{{route('bio.well')}}" class="">Bio Well</a>
                                </li>
                                <li>
                                    <a href="{{route('brain.tap')}}" class="">Brain tape</a>
                                </li>
                                <li>
                                    <a href="" class="">Mental Markers</a>
                                </li>
                                <li>
                                    <a href="" class="">Mental Health</a>
                                </li>
                            </ul>
                        </div>
                        <div class="download-link mt-4">
                            <h4 class="">Recent Link</h4>
                            <div class="quick-link-list">
                                <ul>
                                    <li>
                                        <a href="" class="">Bio Well</a>
                                    </li>
                                    <li>
                                        <a href="" class="">Brain tape</a>
                                    </li>
                                    <li>
                                        <a href="" class="">Mental Markers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="brain-tape-principle">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-left">Brain Tape Principle</h2>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="principle-title">
                            <p class="">
                               {!! nl2br($brain_tape->brain_tape_description) !!}
                            </p>
                        </div>



                    </div>
                    <div class="col-lg-4">
                        <img src="{{asset($brain_tape->brain_tape_description_image)}}" alt="" class="">

                    </div>
                </div>
            </div>
        </section>

        <section class="brain-tape-principle">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-left">The Power of light -
                        The BrainTap Headset
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="principle-title">
                            <p class="">
                               {!! nl2br($brain_tape->brain_tape_headset) !!}
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{asset($brain_tape->brain_tape_headset_image)}}" alt="" class="">
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
    <link rel="stylesheet" href="{{asset('frontend/assets/css/brain-tape.css')}}" class="">

@endpush
