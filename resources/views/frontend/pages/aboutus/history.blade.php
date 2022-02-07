@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | About Us'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')






    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about-history">
            <div class="container" >
                <div class="row ">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 ">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="assets/img/historybook.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-lg-6">
                                <div class="about-intro">
                                    <p>
                                        उत्तरको हिमालय पर्वतदेखि दक्षिणको महाभारत सम्म फैलिएको नेपालको एकमात्र जिल्लाको रुपमा परिचित धादिङ जिल्ला बागमति अञ्चलमा अवस्थित छ । निलकण्ठ नगरपालिकामा रहेको धादिङबेशी यो जिल्लाको सदरमुकाम हो । २०६८ सालको जनगणना अनुसार यहाँको कुल जनसंख्या । ३,३६,०६७ रहेको छ । कुल १९२४.९ वर्ग कि.मी क्षेत्रफल ओगटेको र प्रसिद्ध गाणेश हिमालको काखमा रहेको यो जिल्लामा ७११० मीटर अग्लो पाविल हिमाल यहाँको सवैभन्दा अग्लो हिमाल हो
                                        ।उत्तरको हिमालय पर्वतदेखि दक्षिणको महाभारत सम्म फैलिएको नेपालको एकमात्र जिल्लाको रुपमा परिचित धादिङ जिल्ला बागमति अञ्चलमा अवस्थित छ । निलकण्ठ नगरपालिकामा रहेको धादिङबेशी यो जिल्लाको सदरमुकाम हो । २०६८ सालको जनगणना अनुसार यहाँको कुल जनसंख्या । ३,३६,०६७ रहेको छ । कुल १९२४.९ वर्ग कि.मी क्षेत्रफल ओगटेको र प्रसिद्ध गाणेश हिमालको काखमा रहेको यो जिल्लामा ७११० मीटर अग्लो पाविल हिमाल यहाँको सवैभन्दा अग्लो हिमाल हो ...
                                    </p>
                                    <a href="#" class="btn-learn-more">थप पढ्नुहोस्
                                        <i class="icofont-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->

        <section class="further-program  mt-4 ">
            <div class="container">
                <div class="section-title">
                    <h2 class="">
                        हाम्रो एतिहसिक सङ्रह
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <img src="assets/img/program_1.png" alt="" class="img-fluid">
                                <div class="image-text-wrapper">
                                    <div class="program-info mt-3">
                                        <h6 class="text-center"> वीपी नगर </h6>
                                        <p class="text-center">
                                            नेपालको एकमात्र<br>
                                            जिल्लाको रुपमा परिचित
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-lg-4">
                                <img src="assets/img/program-2.png" alt="" class="img-fluid">
                                <div class="image-text-wrapper">
                                    <div class="program-info mt-3">
                                        <h6 class="text-center"> वीपी नगर </h6>
                                        <p class="text-center">
                                            नेपालको एकमात्र<br>
                                            जिल्लाको रुपमा परिचित
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-->
                            <div class="col-lg-4">
                                <img src="assets/img/program-3.png" alt="" class="img-fluid">
                                <div class="image-text-wrapper">
                                    <div class="program-info mt-3">
                                        <h6 class="text-center"> वीपी नगर </h6>
                                        <p class="text-center">
                                            नेपालको एकमात्र<br>
                                            जिल्लाको रुपमा परिचित
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--col-->

                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <div class="learn-more mt-5 pt-5 d-flex justify-content-center align-items-center">
                </div>
            </div>
        </section>

        <!-- ======= news_media ======= -->
        <section class="history-gallery mt-3">
            <div class="container">
                <div class="section-title">
                    <h2 class="">
                        एतिहसिक तस्बिर्हरु
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="news-card">
                                    <h6 class="">बि स्म १९६५</h6>
                                    <img src="assets/img/suchanaimage.png" alt="suchana_image" class="img-fluid">
                                    <div class="news-content">

                                        <div class="div news_list">
                                            <li class="">
                                                <a href="" class="">
                                                    नेपाल कम्युनिष्ट पार्टी (नेकपा) केन्द्रीय<br>
                                                    सचिवालयको ३१औं बैठक निर्णयहरु
                                                </a>
                                            </li>
                                        </div>
                                        <!--news list-->
                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->

                            <div class="col-lg-4">
                                <div class="news-card">
                                    <h6 class="">बि स्म १९६५</h6>
                                    <img src="assets/img/press.png" alt="suchana_image" class="img-fluid">
                                    <div class="news-content">

                                        <div class="div news_list">
                                            <li class="">
                                                <a href="" class="">
                                                    नेपाल कम्युनिष्ट पार्टी (नेकपा) केन्द्रीय<br>
                                                    सचिवालयको ३१औं बैठक निर्णयहरु
                                                </a>
                                            </li>
                                        </div>
                                        <!--news list-->
                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->

                            <div class="col-lg-4">
                                <div class="news-card">
                                    <h6 class="">बि स्म १९६५</h6>
                                    <img src="assets/img/niyamimage.png" alt="suchana_image" class="img-fluid">
                                    <div class="news-content">

                                        <div class="div news_list">
                                            <li class="">
                                                <a href="" class="">
                                                    नेपाल कम्युनिष्ट पार्टी (नेकपा) केन्द्रीय<br>
                                                    सचिवालयको ३१औं बैठक निर्णयहरु
                                                </a>
                                            </li>
                                        </div>
                                        <!--news list-->
                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->

                            <div class="col-lg-4 mt-5">
                                <div class="news-card">
                                    <h6 class="">बि स्म १९६५</h6>
                                    <img src="assets/img/suchanaimage.png" alt="suchana_image" class="img-fluid">
                                    <div class="news-content">

                                        <div class="div news_list">
                                            <li class="">
                                                <a href="" class="">
                                                    नेपाल कम्युनिष्ट पार्टी (नेकपा) केन्द्रीय<br>
                                                    सचिवालयको ३१औं बैठक निर्णयहरु
                                                </a>
                                            </li>
                                        </div>
                                        <!--news list-->
                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->

                            <div class="col-lg-4 mt-5">
                                <div class="news-card">
                                    <h6 class="">बि स्म १९६५</h6>
                                    <img src="assets/img/press.png" alt="suchana_image" class="img-fluid">
                                    <div class="news-content">

                                        <div class="div news_list">
                                            <li class="">
                                                <a href="" class="">
                                                    नेपाल कम्युनिष्ट पार्टी (नेकपा) केन्द्रीय<br>
                                                    सचिवालयको ३१औं बैठक निर्णयहरु
                                                </a>
                                            </li>
                                        </div>
                                        <!--news list-->
                                    </div>
                                    <!--news content-->
                                </div>
                                <!--news card-->
                            </div>
                            <!--col-4-->

                            <div class="col-lg-4 mt-5">
                                <div class="news-card">
                                    <h6 class="">बि स्म १९६५</h6>
                                    <img src="assets/img/niyamimage.png" alt="suchana_image" class="img-fluid">
                                    <div class="news-content">

                                        <div class="div news_list">
                                            <li class="">
                                                <a href="" class="">
                                                    नेपाल कम्युनिष्ट पार्टी (नेकपा) केन्द्रीय<br>
                                                    सचिवालयको ३१औं बैठक निर्णयहरु
                                                </a>
                                            </li>
                                        </div>
                                        <!--news list-->
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

        <!-- ======= history video ======= -->
        <section id="history-video" class="history-video">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="col-lg-6 px-0 video-img">
                                <img src="assets/img/historyvideo-1.png" class="img-fluid" alt="" style="height: 100%;">
                                <div class="top-left">यस्तो छ नेपाली कांग्रेसको इतिहाँस</div>
                                <div class="bottom-right">८०,९०९ हेरै / फेब २८ , २०१६ </div>
                                <a href="https://www.youtube.com/embed/ZkASIB0cSr8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                            </div>
                            <div class="col-lg-6 px-0">
                                <div class="row">
                                    <div class="col-lg-12 video-img">
                                        <img src="assets/img/historyvideo-2.png" class="img-fluid" alt="" style="width: 100%;" >
                                        <div class="top-left">यस्तो छ नेपाली कांग्रेसको इतिहाँस</div>
                                        <div class="bottom-right">८०,९०९ हेरै / फेब २८ , २०१६ </div>
                                        <a href="https://www.youtube.com/embed/ZkASIB0cSr8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                                    </div>
                                    <div class="col-lg-12 video-img">
                                        <img src="assets/img/historyvideo-3.png" class="img-fluid" alt="" style="width: 100%;" >
                                        <div class="top-left">यस्तो छ नेपाली कांग्रेसको इतिहाँस</div>
                                        <div class="bottom-right">८०,९०९ हेरै / फेब २८ , २०१६ </div>
                                        <a href="https://www.youtube.com/embed/ZkASIB0cSr8" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                                    </div>
                                </div><!--inside row-->
                            </div><!--col-6-->
                        </div><!--col-row-->
                    </div><!--col-10-->
                    <div class="col-lg-1"></div>
                </div><!--main row-->
            </div><!--container-->
        </section>
        <!--end history video-->


    </main><!-- End #main -->
@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/history.css')}}">
{{--    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">--}}
@endpush
