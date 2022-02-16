@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | About Us'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about-history">
            <div class="container" >
                <div class="row ">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 ">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('backend/assets/images/history').'/'.$history->thumbnail }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="about-intro">
                                    <h3>{{ $history->title }}</h3>
                                    <p> {!! $history->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->
    </main><!-- End #main -->
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/history.css')}}">
{{--    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">--}}
@endpush
