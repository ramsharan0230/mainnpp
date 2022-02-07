@extends('frontend.layouts.master')

@section('content')

    <section class="gallery mt-2 pt-4">
        <div class="container">
            <div class="row">
                @foreach($media as $item)
                    <div class="col-lg-3 mb-5 gallery-details">
                        <a href="#" class="venobox" data-gall="gallery-carousel"><img src="{{asset($item->title)}}" alt="" class="img-fluid"></a>
                    </div>

                @endforeach


            </div>
        </div>
    </section>
@endsection



    @push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/gallery.css')}}" class="">
@endpush
