@extends('frontend.layouts.master')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active"
                         style="background-image: url('assets/img/banner-image-1.png');">
                        <div class="carousel-container">
                            <div class="carousel-content container">

                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('assets/img/banner-image-2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">

                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('assets/img/banner-img-3.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">

                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Services tab ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="row services-container">
                        <div class="col-lg-4">
                            <div class="services-box" style="background: #E50B49;">
                                <a href="{{route('press.release')}}"> <h4>प्रेस विज्ञप्ति</h4></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-box" style="background: #1E5EA8;">
                                <a href="{{route('news.event')}}"> <h4>सूचना/ समाचार</h4> </a>
                            </div>
                        </div> <div class="col-lg-4">
                            <div class="services-box" style="background: #1E5EA8;">
                                <a href="{{route('rules.list')}}"> <h4>पार्टी नियमावली</h4> </a>
                            </div>
                        </div>
{{--                        <div class="col-lg-4">--}}
{{--                            <div class="services-box" style="background: #FAA819;">--}}
{{--                               <a href="#"> <h4>नेतृत्वलाई पत्र</h4> </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-lg-4">
                            <div class="services-box" style="background: #78B944;">
                               <a href="#"> <h4>खुला बहस</h4> </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-box" style="background: #329ED5;">
                               <a href="{{ route('online-collections') }}"> <h4>अनलाइन संग्रहालय</h4> </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services-box" style="background: #EE7229;">
                               <a href="{{ route('online-libraries') }}"> <h4>अनलाइन लाइब्रेरी</h4> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </section><!-- End Services tab -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
              <section class="leader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="about-title">
                            <h2>   {!! nl2br(get_section_value('welcome_title')) !!}</h2>
                        </div>
                        <div class="owl-carousel leader_slider owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="leader-box d-flex justify-content-between">
                                            <div class="div leader-image">
                                                <img src="{{get_section_value('welcome_image')}}" alt="leader_image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="leader-description ">
                                            <p class="text-center">
                                                {!! \Illuminate\Support\Str::limit(nl2br(get_section_value('welcome_content')),840) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--inner row-->
                            </div>
                            <!--item-->

                        </div>
                        <!--leader-slider-->
                    </div>
                    <!--col 10-->
                    <div class="col-lg-1"></div>
                </div>
                <!--main row-->
            </div>
            <!--main container-->
        </section>

        <!-- End About Us Section -->

        <!-- ======= news_media ======= -->
        <section class="news_media mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="news-card card">
                                    <img src="assets/img/suchanaimage.png" alt="suchana_image" class="img-fluid">
                                    <div class="news-content">
                                        <div class="news-title mt-3">
                                            <a href="{{ route('news.event') }}"><h2 class="">सूचना तथा समाचार</h2></a>
                                        </div>
                                        {{-- <div class="div news_list">
                                            @foreach($news as $key=>$newsletter)

                                                <li class="">
                                                    <a href="" class="">
                                                        {{$newsletter->title}}
                                                        <i class="icofont-rounded-right float-right"></i>
                                                    </a>
                                                    <p> {!! \Illuminate\Support\Str::limit($newsletter->news_detail, 60, $end='...') !!}</p>
                                                    <div class="views-field views-field-created">
                                                        <span class="views-label views-label-created">Post date: </span>
                                                        <span class="field-content"><em class="placeholder">{{$newsletter->created_at->diffForHumans()}}</em></span>
                                                    </div>

                                                    <div class="read-more d-flex justify-content-end mt-3">
                                                        <a href="{{route('news.detail',$newsletter->id)}}" class="btn-learn-more">थप पढ्नुहोस्
                                                            <i class="icofont-double-right"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                @if($key == 2) @break @endif

                                            @endforeach
                                        </div> --}}
                                        <!--news list-->
                                        {{-- <div class="read-more d-flex justify-content-end mt-3">
                                            <a href="#" class="btn-learn-more">थप पढ्नुहोस्
                                                <i class="icofont-double-right"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->
                            <!--press-->
                            <div class="col-lg-4">
                                <div class="news-card card">
                                    <img src="assets/img/press.png" alt="press_image" class="img-fluid">
                                    <div class="news-content">
                                        <div class="news-title mt-3">
                                            {{-- <h2 class="">प्रेस विज्ञप्ती </h2> --}}
                                            <a href="{{ route('press.release') }}"> <h2>प्रेस विज्ञप्ती</h2> </a>
                                        </div>
                                        {{-- <div class="div news_list">
                                            @foreach($goals as $key=>$goal)

                                            <li class="">
                                                <a href="" class="">
                                                    {{$goal->title}}
                                                    <i class="icofont-rounded-right float-right"></i>
                                                </a>
                                                <p> {!! \Illuminate\Support\Str::limit($goal->content, 60, $end='...') !!}</p>
                                                <div class="views-field views-field-created">
                                                    <span class="views-label views-label-created">Post date: </span>
                                                    <span class="field-content"><em class="placeholder">{{$goal->created_at->diffForHumans()}}</em> </span>
                                                </div>

                                                <div class="read-more d-flex justify-content-end mt-3">
                                                    <a href="{{route('press_release', $goal->slug)}}" class="btn-learn-more">थप पढ्नुहोस्
                                                        <i class="icofont-double-right"></i>
                                                    </a>
                                                </div>
                                            </li>
                                                @if($key == 2) @break @endif
                                            @endforeach

                                        </div> --}}
                                        <!--news list-->
                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->

                            <!--niyam-->
                            <div class="col-lg-4">
                                <div class="news-card card">
                                    <img src="assets/img/niyamimage.png" alt="niyam_image" class="img-fluid">
                                    <div class="news-content">
                                        <div class="news-title mt-3">
                                            <a href="{{ route('rules.list') }}"> <h2>नियम र नियमन</h2> </a>
                                        </div>
                                        {{-- <div class="div news_list">
                                            @foreach($rules as $key=>$rule)

                                                <li class="">
                                                    <a href="" class="">
                                                        {{$rule->title}}
                                                        <i class="icofont-rounded-right float-right"></i>
                                                    </a>
                                                    <p> {!! \Illuminate\Support\Str::limit($rule->content, 60, $end='...') !!}</p>
                                                    <div class="views-field views-field-created">
                                                        <span class="views-label views-label-created">Post date: </span>
                                                        <span class="field-content"><em class="placeholder">{{$rule->created_at->diffForHumans()}}</em> </span>
                                                    </div>

                                                    <div class="read-more d-flex justify-content-end mt-3">
                                                        <a href="{{route('rules.detail',$rule->slug)}}" class="btn-learn-more">थप पढ्नुहोस्
                                                            <i class="icofont-double-right"></i>
                                                        </a>
                                                    </div>
                                                </li>
                                                @if($key == 2) @break @endif
                                            @endforeach
                                        </div> --}}

                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->
                        </div>
                        <!---row-->
                    </div>
                    <!--col-1o-->
                    <div class="div col-lg-1"></div>
                </div>
                <!--rows-->
            </div>
            <!--container-->
        </section>
        <!-- End news media section -->

        <!-- ======= leaders ======= -->
        <section class="leader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="about-title">
                            <h2>   सभापतिको सन्देश
         </h2>
                        </div>
                        <div class="owl-carousel leader_slider owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="leader-box d-flex justify-content-between">
                                            <div class="div leader-image">
                                                <img src="{{get_section_value('chairman_image')}}" alt="leader_image" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="leader-description mt-5 ">
{{--                                            <div class="leader-logo mb-3 d-flex justify-content-center">--}}
{{--                                                <img src="assets/img/leader_logo.png" alt="" class="">--}}
{{--                                            </div>--}}
                                            <p class="text-center">
                                                {!! \Illuminate\Support\Str::limit(nl2br(get_section_value('chairman_content')),840) !!}
                                            </p>

                                            <div class="leader_info">
                                                <h5 class="">{{get_section_value('chairman_title')}}</h5>
{{--                                                <h6 class="">--}}
{{--                                                    नेश्नलिष्ट पिपल्स पार्टी <br>--}}
{{--                                                    - निलकण्ठ नगरपालिका<br>--}}
{{--                                                    धादिङबेशी, जिल्ला, सदरमुकाम--}}
{{--                                                </h6>--}}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--inner row-->
                            </div>
                            <!--item-->

                        </div>
                        <!--leader-slider-->
                    </div>
                    <!--col 10-->
                    <div class="col-lg-1"></div>
                </div>
                <!--main row-->
            </div>
            <!--main container-->
        </section>

        <!-- ======= social media ======= -->
        <section class="social_media">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        @foreach($news as $key=>$newsletter)

                        <div class="owl-carousel social-media-slider owl-theme">
                                <div class="item">
                                <div class="row">
                                    <div class="col-lg-4 mt-5">
                                        <div class="content-left">
{{--                                            <h6 class="">वीपी नगर </h6>--}}
                                            <p class="">{{$newsletter->title}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mt-3 ">
                                        <img src="{{asset($newsletter->banner)}}" alt="" class="">

                                    </div>
                                    <div class="col-lg-4 mt-5 pt-3">
                                        <div class="content-right d-flex ">
                                            <h6 class="">१३</h6>
                                            <p> {!! \Illuminate\Support\Str::limit($newsletter->news_detail, 60, $end='...') !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--item 2-->
                        </div>
                            @if($key == 1) @break @endif

                        @endforeach

                        <hr>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>

        <section class="further-program  mt-4 ">
            <div class="container">
{{--                <p class="text-center title"> नेपालको एकमात्र जिल्लाको रुपमा परिचित </p>--}}
                <div class="section-title">
                    <h2 class="">
                        हाम्रो आउंदो कार्यक्रमहरु
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="row">
                            @foreach($events as $key=>$event)

                                <div class="col-lg-4 mt-5 pt-5">
                                    <img src="{{asset($event->banner)}}" alt="" class="img-fluid">
                                    <div class="image-text-wrapper">
                                        <div class="program-info mt-3">
                                            <h6 class="text-center">  {{$event->title}} </h6>
                                            <p class="text-center">
                                                {!! \Illuminate\Support\Str::limit($event->news_detail, 60, $end='...') !!}                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @if($key == 5) @break @endif

                        @endforeach
                            <!--col-->
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
{{--                <div class="learn-more mt-5 pt-5 d-flex justify-content-center align-items-center">--}}
{{--                    <a href="" class="btn-read-more">थप् हेर्नुहोस्</a>--}}
{{--                </div>--}}
            </div>
        </section>

    </main><!-- End #main -->



@endsection

@push('styles')
    <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/about.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/css/office.css')}}" rel="stylesheet">
@endpush

