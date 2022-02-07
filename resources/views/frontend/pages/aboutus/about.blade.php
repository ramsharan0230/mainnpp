@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | About Us'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')

    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center">हाम्रो बारेमा</h1>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about mt-2">
            <div class="container" data-aos="fade-up">
                <div class="row ">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10 ">
                        <div class="row">
                            <div class="col-lg-6">
                                <h6 class="">हाम्रो बारेमा</h6>
                                <p class="intro-title">हाम्रो बारेमा
                                    उत्तरको हिमालय पर्वतदेखि दक्षिणको
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <img src="assets/img/aboutusimage.png" alt="" class="img-fluid">
                                <div class="about-intro">
                                    <p>
                                        उत्तरको हिमालय पर्वतदेखि दक्षिणको महाभारत सम्म फैलिएको नेपालको एकमात्र जिल्लाको रुपमा परिचित
                                        धादिङ जिल्ला बागमति अञ्चलमा अवस्थित छ । निलकण्ठ नगरपालिकामा रहेको धादिङबेशी यो जिल्लाको
                                        सदरमुकाम हो । २०६८ सालको जनगणना अनुसार यहाँको कुल जनसंख्या ३,३६,०६७ रहेको छ ।
                                        कुल १९२४.९ वर्ग कि.मी क्षेत्रफल ओगटेको र प्रसिद्ध गाणेश हिमालको काखमा रहेको यो जिल्लामा
                                        ७११० मीटर अग्लो पाविल हिमाल यहाँको सवैभन्दा अग्लो हिमाल हो । बि.स.२०६८ को जनगणना
                                        अनुसार ७३,८५१ घरधुरी संख्या र ३,३६,०६७ जनसंख्याले बसोबास गर्ने यो जिल्ला मनोरंजन ..
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

        <!---protest-->
        <section class="protest">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="owl-carousel protest_slider owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image">
                                                <img src="assets/img/program_1.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #E50B49;">
                                            <div class="program-info ">
                                                <h6 class="text-center">काठमाडौं </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image">
                                                <img src="assets/img/program-2.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #1E5EA8;"  >
                                            <div class="program-info">
                                                <h6 class="text-center">वीपी नगर </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image" style="background-color: #E50B49;">
                                                <img src="assets/img/program-3.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #78B944;">
                                            <div class="program-info">
                                                <h6 class="text-center">ललितपुर </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--inner row-->
                            </div><!--item-->
                            <!--item 2-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image">
                                                <img src="assets/img/program_1.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #E50B49;">
                                            <div class="program-info ">
                                                <h6 class="text-center">काठमाडौं </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image">
                                                <img src="assets/img/program-2.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #1E5EA8;"  >
                                            <div class="program-info">
                                                <h6 class="text-center">वीपी नगर </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image" style="background-color: #E50B49;">
                                                <img src="assets/img/program-3.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #78B944;">
                                            <div class="program-info">
                                                <h6 class="text-center">ललितपुर </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--inner row-->
                            </div><!--item-->
                            <!--item 3-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image">
                                                <img src="assets/img/program_1.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #E50B49;">
                                            <div class="program-info ">
                                                <h6 class="text-center">काठमाडौं </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image">
                                                <img src="assets/img/program-2.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #1E5EA8;"  >
                                            <div class="program-info">
                                                <h6 class="text-center">वीपी नगर </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 px-0">
                                        <div class="protest-box d-flex justify-content-between">
                                            <div class="div protest-image" style="background-color: #E50B49;">
                                                <img src="assets/img/program-3.png" alt="protest_image" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="image-text-wrapper" style="background-color: #78B944;">
                                            <div class="program-info">
                                                <h6 class="text-center">ललितपुर </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--inner row-->
                            </div><!--item-->
                        </div><!--leader-slider-->
                    </div><!--col 10-->
                    <div class="col-lg-1"></div>
                </div>

            </div>
            </div>
        </section>
        <!--protest end-->

        <!--count section-->
        <section id="counts" class="counts">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="count-heading">
                    <h2 class="">कृयासिल सदस्य</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <span>००३१२३१</span>
                            <p>सदस्य</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <span>००३१२३१</span>
                            <p>सदस्य</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <span>००३१२३१</span>
                            <p>सदस्य</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <span>००३१२३१</span>
                            <p>सदस्य</p>
                        </div>
                    </div>
                </div>
                <div class="readmore mt-3 d-flex justify-content-center align-items-center">
                    <a href="" class="btn-read-more">थप् हेर्नुहोस्</a>
                </div>
            </div>
        </section>






    </main><!-- End #main -->

@endsection
@push('styles')
    <link href="{{asset('frontend/assets/css/base.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">
@endpush
