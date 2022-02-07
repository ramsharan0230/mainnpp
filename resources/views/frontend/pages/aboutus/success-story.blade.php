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

                @foreach($success as $key=>$item)
                <div class="col-lg-5 text-center">
                    <img src="{{asset($item->profile)}}" alt="" style="max-height:130px;" class="img-fluid">
                    <div class="principle-information mt-3">
                        <h6 class="text-center">{{$item->name}}</h6>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="message-content">
                        <p class="text-justify">
                            {!! nl2br($item->summary) !!}
                        </p>
                        <div class="readmore">
                            <a href="{{route('success.story.detail',$item->id)}}" class="btn-readmore">Read More</a>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </section>

    {{-- <section class="more-student-sucess">
        <div class="container">
            <div class="section-title mb-4">
                <h2 class="text-center">More Student Success Stories</h2>
            </div>
            <div class="row">
                @foreach($success as $key=>$item)
                <div class="col-lg-3">
                    <div class="student-box text-center">
                        <img src="{{asset($item->profile)}}" style="max-height: 130px" alt="" class="img-fluid">
                        <div class="student-content">
                            <h5 class=" mt-3">
                                {{$item->name}}
                            </h5>
                            <p class="">
                                {!! \Illuminate\Support\Str::limit(nl2br($item->summary),100) !!}
                            </p>
                            <div class="readmore">
                                <a href="{{route('success.story.detail',$item->id)}}" class="btn-learn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section> --}}




@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/success-story.css')}}" class="">
@endpush
