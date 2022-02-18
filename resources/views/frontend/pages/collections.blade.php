@extends('frontend.layouts.master')

@section('content')


    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center">फोटो ग्यालरी र भिडियो ग्यालरी </h1>
        </div>
    </section><!-- End Hero -->

    <section class="gallery mt-3 pt-3">
        <div class="container">
            <div class="row">
               @foreach($photoGalleries as $gallery)
                <div class="col-lg-4" >
                    @php
                        $photo=explode(',', $gallery->photo)
                    @endphp
                     <a href="{{ route('photo.detail', $gallery->slug) }}" class=""><img src="{{asset($photo[0])}}" alt="" class="img-fluid">
                    <figcaption>{{$gallery->photo_title}}</figcaption>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach($videoGalleries as $videoGallery)
                <div class="col-lg-4">
                    <a class="embed-responsive embed-responsive-16by9" href="/gallery/video-gallery">
                        {!! $videoGallery->video_url !!}
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
    <link  href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/lightgallery.es5.min.js" integrity="sha512-F8zM+wlMcfzbRJYCxxjgmJ3FwvKHP9PYI/qfjFTsg+CxFON8IU2z2iVIFSb8EeKH+/ItmAmX/AQ+JI7ovCo97w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/lightgallery.min.js" integrity="sha512-UqekH1csMUReTDT3fcW4b7NMEPGcTrQTZk/Hod5AteK5LTdesdY81l2rzg8FqfRTfxy008e53oR5YMi9QpuNEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/lightgallery.min.js" integrity="sha512-UqekH1csMUReTDT3fcW4b7NMEPGcTrQTZk/Hod5AteK5LTdesdY81l2rzg8FqfRTfxy008e53oR5YMi9QpuNEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script>
            lightGallery(document.getElementById('static-thumbnails'), {
                animateThumb: false,
                zoomFromOrigin: false,
                allowMediaOverlap: true,
                toggleThumb: true,
            });

        </script>
@endpush
