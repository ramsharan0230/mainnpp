@extends('frontend.layouts.master')

@section('content')


    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center">फोटो ग्यालरी </h1>

        </div>
    </section><!-- End Hero -->

   <section class="gallery mt-3 pt-3">
        <div class="container">
            <div class="row">
               @foreach($photo as $item)
                <div class="col-lg-4" >
                    @php
                        $photo=explode(',',$item->photo)
                    @endphp
                     <a href="{{ route('photo.detail', $item->slug) }}" class=""><img src="{{asset($photo[0])}}" alt="" class="img-fluid">
                    <figcaption>{{$item->photo_title}}</figcaption>
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
{{--=======--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/css/lightgallery.min.css" integrity="sha512-7eMiZQKgls1r8jcWf35rP5ZNgaaZzSt+ZacRjKZYP0s65Kcj7IdG5412uQn370Ne2dAqn+eOGK3yN4XU6gdt8A==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/css/lg-zoom.min.css" integrity="sha512-SGo05yQXwPFKXE+GtWCn7J4OZQBaQIakZSxQSqUyVWqO0TAv3gaF/Vox1FmG4IyXJWDwu/lXzXqPOnfX1va0+A==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/css/lg-thumbnail.min.css" integrity="sha512-wHHBD+hSImJWcX192FT77uzFT4pVJDZ5sTiVYE3cArMtIix9lycXS0lvuLwRVyyFQO4pTj7MKxSuFKFMVzjK2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />--}}
{{--@endpush--}}

{{--@push('scripts')--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/lightgallery.min.js" integrity="sha512-UqekH1csMUReTDT3fcW4b7NMEPGcTrQTZk/Hod5AteK5LTdesdY81l2rzg8FqfRTfxy008e53oR5YMi9QpuNEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.0-beta.3/lightgallery.umd.min.js" integrity="sha512-76gx5hx7YwMGkIQuLtUqdpMfzJ8+xv76OVb+mzv1nOfCe5VPWb03HLfTHzjM43UPwYe2wzs5gsPmij0YUKeQCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}

{{--<script>--}}
{{--    lightGallery(document.getElementById('static-thumbnails'), {--}}
{{--    animateThumb: false,--}}
{{--    zoomFromOrigin: false,--}}
{{--    allowMediaOverlap: true,--}}
{{--    toggleThumb: true,--}}
{{--});--}}

{{--</script>--}}
{{-->>>>>>> 111445a8eccb8d196fdfbc26a3f003a348b2b4cf--}}
@endpush
