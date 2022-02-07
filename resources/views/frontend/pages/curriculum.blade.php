@extends('frontend.layouts.master')

@section('meta_title',$industry->meta_title ?? (get_setting('title').' | Curriculum Page'))
@section('meta_description',$industry->meta_description ?? get_setting('meta_description'))
@section('meta_keywords',$industry->meta_keywords ?? get_setting('meta_keywords'))

@section('content')
    <div id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <div class="d-flex ">
                <h1 class="">Curriculum – Elementary School</h1>
            </div>

            <div class="breadcrumbs">
                <div class="container">
                    <div class="d-flex align-items-center">
                        <ol>

                            <li ><a href="{{route('home')}}">Home</a></li>
                            <li style="color: #fff;">Curriculum – Elementary School</li>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- End Hero -->


    <section class="school-type">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 admission-information">


                    <div class="school-name mt-4">
                        <h5 class="">The Elementary School Curriculum outlines the contents of children’s learning for their first five years in school. The curriculum aims to:</h5>
                        <ul>
                            <li>Develop each child’s potential to the full</li>
                            <li>Encourage a love of learning</li>
                            <li>Help children develop skills they will use all their lives.</li>
                        </ul>
                        <p class="">The curriculum is presented in seven areas, some of which are further subdivided into subjects     </p>
                    </div>

                    <div class="why-us">


                        <div class="accordion-list">
                            <ul>

                                <li>
                                    <a data-toggle="collapse" class="collapse collapsed" href="#accordion-list-1" aria-expanded="false">
                                        language
                                        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                                    </a>
                                    <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list" >
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="">Language in the Elementary School involves two subjects. Learning a
                                                    language is an integrated process in which the four forms – reading, writing,
                                                    listening and speaking – are inseparable. Children learn language but,
                                                    they also learn through language. These two principles are enshrined in
                                                    the four strands of the curriculum.</p>
                                            </div>
                                            <div class="col-lg-6 course-list">
                                                <h5 class="">strand</h5>
                                                <ul>
                                                    <li>Receptiveness to language</li>
                                                    <li>Competence and confidence in using language</li>
                                                    <li>Developing cognitive abilities through language</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </li>

                                <hr>

                                <li>
                                    <a data-toggle="collapse" href="#accordion-list-2" class="collapsed" aria-expanded="false">
                                        Mathematics
                                        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                                    </a>
                                    <div id="accordion-list-2" class="collapse" data-parent=".accordion-list" >
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="">Language in the Elementary School involves two subjects. Learning a
                                                    language is an integrated process in which the four forms – reading, writing,
                                                    listening and speaking – are inseparable. Children learn language but,
                                                    they also learn through language. These two principles are enshrined in
                                                    the four strands of the curriculum.</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="">strand</h5>
                                                <ul>
                                                    <li>Receptiveness to language</li>
                                                    <li>Competence and confidence in using language</li>
                                                    <li>Developing cognitive abilities through language</li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <hr>

                                <li>
                                    <a data-toggle="collapse" href="#accordion-list-3" class="collapsed">
                                        Science
                                        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                                    </a>
                                    <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="">Language in the Elementary School involves two subjects. Learning a
                                                    language is an integrated process in which the four forms – reading, writing,
                                                    listening and speaking – are inseparable. Children learn language but,
                                                    they also learn through language. These two principles are enshrined in
                                                    the four strands of the curriculum.</p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5 class="">strand</h5>
                                                <ul>
                                                    <li>Receptiveness to language</li>
                                                    <li>Competence and confidence in using language</li>
                                                    <li>Developing cognitive abilities through language</li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <hr>

                            </ul>
                        </div>
                    </div>



                </div>

                <div class="col-lg-4 ">
                    <div class="right">
                        <div class="realted-link-box ml-4">
                            <h1>Quick Links</h1>
                            <ul>
                                <li><a href="">Admission</a></li>
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
    <link href="{{asset('frontend/assets/css/elementryschool.css')}}" rel="stylesheet">
@endpush
