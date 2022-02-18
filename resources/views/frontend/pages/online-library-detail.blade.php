@extends('frontend.layouts.master')

@section('meta_title',$industry->meta_title ?? (get_setting('title')))
@section('meta_description',$industry->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$industry->meta_keywords ?? get_setting('meta_keywords'))

@section('content')

    <main id="main">
    <section id="about" class="about mt-2">
        <div class="container" data-aos="fade-up">
            <div class="row ">
                <div class="col-lg-1"></div>
                <div class="col-lg-10 ">
{{--                    <h6 class="">वीपी नगर </h6>--}}
                    <div class="samachar content">
                        <div class="row">
                            <div class="col-lg-8">
                                <p class="intro-title">
                                    {{$onlineLibrary->title}}
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <div class="content-right d-flex ">
                                    <h6 class="">{{$onlineLibrary->created_at->format('d')}}</h6>
                                    <p class="">
                                        {{ $onlineLibrary->subtitle }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="news-article">
                        <img src="{{asset($onlineLibrary->thumbnail)}}" alt="" class="img-fluid">
                        <div class="about-intro mt-2">
                            @if($onlineLibrary->file)
                                <a class="btn btn-primary btn-sm" href="{{ asset($onlineLibrary->file) }}"> <i class="fa fa-download"></i> Download</a>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section>
    </main>




@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}" class="">
    <link href="{{asset('frontend/assets/css/samacharnews.css')}}" rel="stylesheet">

@endpush
