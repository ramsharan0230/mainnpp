@extends('frontend.layouts.master')

@section('meta_title',$about->meta_title ?? (get_setting('title').' | About Us'))
@section('meta_description',$about->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$about->meta_keywords ?? get_setting('meta_keywords'))

@section('content')



    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 class="text-center">कृयाशिल सदस्य तथा कार्यालय</h1>
            <div class="d-flex justify-content-center align-items-center mt-2">
                <a href="#" class="btn-member">कृयाशिल सदस्य</a>
                <a href="#" class="btn-office">कार्यालय</a>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about mt-2">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2 class="">
                        कार्यालय
                    </h2>
                </div>
                <div class="row ">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="office-tab">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                @forelse ($provinces as $key=>$province)
                                <li class="nav-item">
                                    <a class="nav-link {{ $key==0?'active':''}}" id="pills-{{ $province->slug }}-tab" data-toggle="pill" href="#pills-{{ $province->slug }}" role="tab" aria-controls="pills-{{ $province->slug }}" aria-selected="true"> {{ $province->name }}</a>
                                </li>
                                @empty
                                    
                                @endforelse
                                
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="pills-pardesh2-tab" data-toggle="pill" href="#pills-pardesh2" role="tab" aria-controls="pills-pardesh2" aria-selected="false">प्रदेश नं. २</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pardesh3-tab" data-toggle="pill" href="#pills-pardesh3" role="tab" aria-controls="pills-pardesh3" aria-selected="false">बागमती प्रदेश</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pardesh4-tab" data-toggle="pill" href="#pills-pardesh4" role="tab" aria-controls="pills-pardesh4" aria-selected="false">  गण्डकी प्रदेश  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pardesh5-tab" data-toggle="pill" href="#pills-pardesh5" role="tab" aria-controls="pills-pardesh5" aria-selected="false">  लुम्बिनी प्रदेश </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pardesh6-tab" data-toggle="pill" href="#pills-pardesh6" role="tab" aria-controls="pills-pardesh6" aria-selected="false">  कर्णाली प्रदेश  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-pardesh7-tab" data-toggle="pill" href="#pills-pardesh7" role="tab" aria-controls="pills-pardesh7" aria-selected="false">  सुदूरपश्चिम प्रदेश  </a>
                                </li> --}}

                            </ul>
                            <div class="tab-content" id="pills-tabContent">

                                @forelse ($provinces as $key=>$province)
                                <div class="tab-pane fade show {{ $key==0?'active':''}}" id="pills-{{ $province->slug }}" role="tabpanel" aria-labelledby="{{ $province->slug }}-tab">
                                    <div class="office">
                                        <div class="row">

                                            @forelse ($province->offices as $office)
                                            <div class="col-lg-6">
                                                <div class="office-box d-flex justify-content-between">
                                                    <div class="div office-image">
                                                    </div>
                                                </div>
                                                <div class="office-info ">
                                                    {{-- fire --}}
                                                    <div class="alert alert-success" role="alert">
                                                        <h4 class="alert-heading">{{ $office->name }}</h4>
                                                        <hr>
                                                        <p class="mb-0">Telephone: {{ $office->telephone }}</p>
                                                    </div>
                                                    {{-- fire edd --}}
                                                </div>
                                            </div>
                                            @empty
                                                
                                            @endforelse
                                            


                                        </div><!--inner row-->
                                    </div>
                                </div>
                                @empty
                                    
                                @endforelse
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->




    </main><!-- End #main -->

@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/history.css')}}">
{{--    <link rel="stylesheet" href="{{asset('frontend/assets/css/about.css')}}" class="">--}}
@endpush
