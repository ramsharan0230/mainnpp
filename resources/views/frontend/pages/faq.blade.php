@extends('frontend.layouts.master')

@section('content')

    <section id="hero">
        <div class="hero-container">
            <img src="assets/img/faqimage.jpg" alt="" class="img-fluid">


            <div class="carousel-container">
                <div class="carousel-content container">
                    <div class="row">

                        <div class="col-lg-12">

                            <h2 class="text-center">
                                Frequently Asked Questions
                            </h2>
                            <p class="">

                            </p>

                        </div>
                    </div><!--row-->
                </div>
            </div>
        </div>
    </section><!-- End Hero -->





    <main id="main">

        <section class="collapse-area">
            <div class="section-title">
                <h2 class="">Frequently Asked Questions</h2>
            </div>
            <div class="container">
                <div class="row faq-panel">
                    <div class="collapse-tab col-xs-12">
                        <div class="panel-group" id="accordion">
                            @foreach($faq as $key=>$item)
                            <div class="panel panel-default" id="panel{{$key}}">
                                <!-- Start: Tab-1 -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}" class="{{$key==0 ? '' : 'collapsed'}}">
                                            {{ucfirst($item->question)}}
                                            <span class="bar hidden-xs"></span>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$key}}" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        {{$item->answer}}
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/faq.css')}}" class="">
@endpush
