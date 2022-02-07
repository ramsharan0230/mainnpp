@extends('frontend.layouts.master')

@section('meta_title',$industry->meta_title ?? (get_setting('title').' | industy detail'))
@section('meta_description',$industry->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$industry->meta_keywords ?? get_setting('meta_keywords'))

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex ">
                <h1 class="">Admission</h1>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <ol>

                            <li style="color: #fff;">Samata School</li>
                            <li><a href="admission.html">Admission</a></li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->


    <section class="admission">
        <div class="container">
            <div class="section-title">
                <h2 class="">Admission</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 admission-information">
                   <p>{!! html_entity_decode(\App\Models\Sectiontitle::value('admission_content')) !!}
</p>
                </div>

                <div class="col-lg-4 ">
                    <div class="right">
                        <div class="realted-link-box ml-4">
                            <h1>Quick Links</h1>
                            <ul>
                                <li><a href="{{route('admission')}}">Admission</a></li>
                                <li><a href="">Fee</a></li>
                                <li><a href="">Awards and scholarships</a></li>
                                <li><a href="">Facilities</a></li>
                                <li><a href="">Co-Curricular</a></li>
                                <li><a href="">Health Center</a></li>
                                <li><a href="">Senior Management</a></li>
                                <li><a href="">Cafeteria</a></li>
                                <li><a href="">Transportation</a></li>
                                <li><a href="">Gallery</a></li>
                            </ul>

                        </div>

                    </div>



                    @if(\App\Models\NewsEvent::count()>0)
                        <div class="sidebar mt-5 pt-3">
                            <div class="notice-board ml-4">
                                <h5 class="">News & Events</h5>
                                <ul>
                                    @foreach(\App\Models\NewsEvent::orderBy('id','DESC')->get() as $item)
                                        <li>
                                            <h6 class="">{{$item->title}}</h6>
                                            <p class="notice-date"><i class="icofont-clock-time"></i>
                                                {{\Illuminate\Support\Carbon::parse($item->start_date)->format('F d, Y')}}</p>
                                        </li>
                                        <hr>
                                    @endforeach


                                </ul>
                            </div>
                        </div>
                    @endif




                </div>
            </div>
        </div>
    </section>


@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}" class="">
    <link href="{{asset('frontend/assets/css/admission.css')}}" rel="stylesheet">
@endpush
