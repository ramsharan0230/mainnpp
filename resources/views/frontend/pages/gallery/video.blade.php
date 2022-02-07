@extends('frontend.layouts.master')

@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center">भिडियो ग्यालरी </h1>

        </div>
    </section><!-- End Hero -->

    <section class="gallery mt-2 pt-5">
        <div class="container">

            <div class="row mb-5">

                @foreach($video as $item)

                <div class="col-lg-4 mb-4">
                    <a class="embed-responsive embed-responsive-16by9" href="/gallery/video-gallery">
                        {!! $item->video_url !!}
                    </a>
                </div>

                @endforeach



            </div>
        </div>
    </section>


@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/press.css')}}" class="">
@endpush
