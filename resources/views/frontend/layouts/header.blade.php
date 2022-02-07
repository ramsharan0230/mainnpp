<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="contact-info float-left">
                    <i class="icofont-phone"></i><a href="mailto:info@nppnepal.org">info@nppnepal.org</a>

                </div>

                <div class="social-links float-right">
                    <a href="{{get_setting('facebook_url')}}" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="{{get_setting('linkedin_url')}}" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="{{get_setting('twitter_url')}}" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="{{get_setting('instagram_url')}}" target="_blank" class="twitter"><i class="bx bxl-instagram"></i></a>
                </div>
                <div class="col-lg-1"> </div>

            </div>

        </div>
    </div>
</section>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="logo float-left">
                    <a href="{{route('home')}}"><img src="{{asset(get_setting('logo'))}}" alt="{{get_setting('title')}}" class="img-fluid"></a>
                </div>
                @include('frontend.layouts.navbar')
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</header>

