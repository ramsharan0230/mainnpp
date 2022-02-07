<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.layouts.head')
    @toastr_css

</head>

<body>

<!-- ======= Header ======= -->
@include('frontend.layouts.header')

<!-- ======= Hero Section ======= -->
@yield('content')
<!-- ======= Footer ======= -->
@include('frontend.layouts.footer')

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

@jquery
@include('frontend.layouts.script')
@toastr_js
@toastr_render
</body>

</html>
