@extends('frontend.layouts.master')

@section('content')

    <!-- Breadcumb Area -->
    <div class="breadcumb_area d-none">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h5 class="mt-4">My Account</h5>
                    <ol class="breadcrumb mt-2">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Area -->

    <!-- My Account Area -->
    <section class="my-account-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="my-account-navigation mb-50">
                       @include('frontend.user.sidebar')
                    </div>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="my-account-content mb-50">
                        <h4 class="mb-4">Hello <strong>{{$user->full_name}} !</strong> </h4>
                        <p>From your account dashboard you can view your recent orders, manage your shipping and billing addresses, and <a href="{{route('user.account')}}">edit your password and account details</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- My Account Area -->

@endsection
