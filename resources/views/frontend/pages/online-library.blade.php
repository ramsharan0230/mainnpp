@extends('frontend.layouts.master')
@section('meta_title', get_setting('title'))
@section('content')
    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center">अनलाइन संग्रहालय</h1>
        </div>
    </section><!-- End Hero -->

    <main id="main" >

        <section class="press-release">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9">
                        @foreach($onlineLibraries as $item)
                        <div class="press-box mt-2">
                            <div class="press-content">
                                <div class="entry-meta d-flex justify-content-end">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="ri-eye-line" style="color:black"></i>
                                            <a href="#">३१</a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="ri-share-fill" style="color:black"></i>
                                            <a href=""></a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="ri-facebook-fill"></i>
                                            <a href=""></a>
                                        </li>
                                        <li class="d-flex align-items-center"><i class="ri-twitter-fill"></i>
                                            <a href=""></a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2 ">
                                        <img src="{{asset($item->thumbnail)}}" alt="" class="img-fluid">

                                    </div>
                                    <div class="col-lg-10 ">
                                        <div class="views-field views-field-created">
                                            <span class="views-label views-label-created">Post date: </span>
                                            <span class="field-content"><em class="placeholder">{{$item->created_at}}</em> ago</span>
                                        </div>
                                        <div class="news-title">
                                            <h6 class="">
                                                {{$item->title}}
                                            </h6>
                                        </div>
                                        <div class="news-describe">
                                            <p>{!! \Illuminate\Support\Str::limit($item->news_detail, 250, ' ...') !!}</p>
                                            <div class="read-more mt-3">
                                                <a href="{{route('online-libraries.detail', $item->slug)}}" class="btn-learn-more">थप पढ्नुहोस्
                                                    <i class="icofont-double-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box 2-->
                        @endforeach


                    </div>
                    <div class="col-lg-3 right-sidebar">
                        <div class="new-wrapper">
                            <h3>प्रेस विज्ञप्ति</h3>
                            @foreach($pressreleases as $key=>$release)
                            <div class="press-title-box">

                                <div class="views-field views-field-created">
                                    <span class="views-label views-label-created">Post date: </span>
                                    <span class="field-content"><em class="placeholder">{{$release->created_at->diffForHumans()}}</em> </span>
                                </div>
                                <h4 class="title">
                                    <a href=""> {{$release->title}}</a>
                                </h4>
                                <p class="news-articles">
                                    {{\Illuminate\Support\Str::limit($release->content, 60, $end='...')}}
                                </p>
                                <div class="read-more">
                                    <a href="{{route('press_release', $release->slug)}}" class="btn-learn-more">थप पढ्नुहोस्
                                        <i class="icofont-double-right"></i>
                                    </a>
                                </div>
                            </div>
                                @if($key == 5) @break @endif
                            @endforeach
                    </div><!--right -sidebar-->
                </div><!--main row-->
            </div><!--container-->
        </section>

    </main>





@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/press.css')}}" class="">
@endpush
