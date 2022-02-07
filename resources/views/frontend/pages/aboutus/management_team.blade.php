@extends('frontend.layouts.master')
@section('meta_title',get_setting('title').' | Management Team')
@section('content')

    <main id="main">

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">
            

                <div class="row">

                    @foreach($teams as $team)
                    <div class="col-lg-4 my-4">
                        <div class="member ">

                            <div class="pic d-flex justify-content-center align-items-center">
                                <div class="profile" style="height:150px;width:150px;">
                                    <img src="{{asset($team->profile_path)}}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{ucfirst($team->full_name)}}</h4>
                                <span>{{$team->designation}}</span>
                            
                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Doctors Section -->

    </main><!-- End #main -->

@endsection
@push('styles')
    <!--  Main CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/team.css')}}" class="">
@endpush
