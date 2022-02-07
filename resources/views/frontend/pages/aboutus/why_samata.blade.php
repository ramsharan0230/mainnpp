@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | Why Samata'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex ">
                <h1 class=""> Why Samata Shiksha Niketan ?</h1>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <ol>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li style="color: #fff;">Why samata</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->


    <section class="why-samata">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 about-samata">
                   {!! html_entity_decode(get_section_value('why_samata_school')) !!}
                </div>
               
            </div>
        </div>
    </section>

@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about-samata.css')}}" class="">
@endpush
