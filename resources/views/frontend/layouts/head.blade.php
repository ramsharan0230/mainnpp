<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>@yield('meta_title',get_setting('title'))</title>
<meta content="@yield('meta_description',get_setting('meta_description'))" name="description">
<meta content="@yield('meta_keywords',get_setting('meta_keywords'))" name="keywords">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

@php
    $settings=\App\Models\Setting::first();
@endphp
@if($settings->favicon)
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/frontend/images/settings/'.$settings->favicon)}}">
@else
    <link rel="shortcut icon" type="image/x-icon" href="{{asset(Helper::defaultFavicon())}}">
@endif


<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
{{--<link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">--}}
<link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">

<!-- CSS File -->


@stack('styles')
