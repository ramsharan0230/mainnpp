@extends('frontend.layouts.master')

@section('content')

{{--    <section id="hero" style="@if($banner !=null )background: url({{asset($banner->image_path)}});@endif background-repeat: no-repeat;">--}}
{{--        <div class="hero-container" data-aos="fade-up" data-aos-delay="100">--}}
{{--            <h1 class="animate__animated animate__fadeInDown">--}}
{{--                {{$banner !=null ? $banner->title : 'We Help Businesses'}}--}}
{{--            </h1>--}}
{{--            <h2 class="animate__animated animate__fadeUp">--}}
{{--                {!! $banner !=null ? html_entity_decode($banner->description) :'Empower people through technology and innovative solutions' !!}--}}
{{--            </h2>--}}

{{--        </div>--}}
{{--    </section>--}}


{{--    <main id="main">--}}


{{--        <section id="blog" class="blog">--}}
{{--            <div class="container" data-aos="fade-up">--}}

{{--                <div class="row">--}}

{{--                    <div class="col-lg-8 entries">--}}

{{--                        <article class="entry entry-single">--}}

{{--                            <div class="entry-img">--}}
{{--                                <img src="{{asset($blog->image_path)}}" alt="" class="img-fluid">--}}
{{--                            </div>--}}

{{--                            <h2 class="entry-title">--}}
{{--                                <a href="javascript:;">{{$blog->title}}</a>--}}
{{--                            </h2>--}}

{{--                            <div class="entry-meta">--}}
{{--                                <ul>--}}
{{--                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="javascript:;"><i class="icofont-user"></i> {{ucfirst($blog->posted_by)}}</a></li>--}}
{{--                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="javascript:;"><time datetime="2020-01-01"><i class="icofont-clock-time"></i>  {{\Carbon\Carbon::parse($blog->created_at)->format('M d,Y')}}</time></a></li>--}}
{{--                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}

{{--                            <div class="entry-content">--}}
{{--                                @if($blog->quote !=null)--}}

{{--                                <blockquote>--}}
{{--                                    <p>--}}
{{--                                        {!! html_entity_decode($blog->quote) !!}--}}
{{--                                    </p>--}}
{{--                                </blockquote>--}}

{{--                                @endif--}}

{{--                                {!! html_entity_decode($blog->content) !!}--}}

{{--                            </div>--}}


{{--                            <div class="entry-footer">--}}
{{--                                <i class="icofont-tags"></i>--}}
{{--                                <ul class="cats">--}}
{{--                                    <li><a href="javascript:;">Tags</a></li>--}}
{{--                                </ul>--}}

{{--                                <i class="bi bi-tags"></i>--}}
{{--                                <ul class="tags">--}}
{{--                                    @foreach($blog->blog_tags as $tag)--}}
{{--                                    <li><a href="javascript:;">{{ucfirst($tag->title)}}</a></li>--}}
{{--                                    @endforeach--}}

{{--                                </ul>--}}
{{--                            </div>--}}

{{--                        </article><!-- End blog entry -->--}}






{{--                        <!-- End blog comments -->--}}

{{--                    </div><!-- End blog entries list -->--}}

{{--                    <div class="col-lg-4">--}}

{{--                        <div class="sidebar">--}}

{{--                            <h3 class="sidebar-title">Search</h3>--}}
{{--                            <div class="sidebar-item search-form">--}}
{{--                                <form action="{{route('blog.search')}}" method="get">--}}
{{--                                    <input type="text" name="search" autocomplete="off"--}}
{{--                                           placeholder="Search in blog" required >--}}
{{--                                    <button type="submit">--}}
{{--                                        <i class="icofont-search-1"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div><!-- End sidebar search formn-->--}}

{{--                            <h3 class="sidebar-title">Categories</h3>--}}
{{--                            <div class="sidebar-item categories">--}}
{{--                                <ul>--}}
{{--                                    @foreach($blog_categories as $cat)--}}
{{--                                    <li><a href="{{route('blog.category',$cat->id)}}">{{ucfirst($cat->title)}} <span>({{count($blog_categories)}})</span></a></li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div><!-- End sidebar categories-->--}}

{{--                            <h3 class="sidebar-title">Recent Posts</h3>--}}
{{--                            <div class="sidebar-item recent-posts">--}}
{{--                                @foreach($recent_blogs as $blog)--}}
{{--                                <div class="post-item clearfix">--}}
{{--                                    <img src="{{asset($blog->image_path)}}" alt="">--}}
{{--                                    <h4><a href="{{route('blog.detail',$blog->slug)}}">{{ucfirst($blog->title)}}</a></h4>--}}
{{--                                    <time datetime="2020-01-01"> {{\Carbon\Carbon::parse($blog->created_at)->format('M d,Y')}}</time>--}}
{{--                                </div>--}}
{{--                                @endforeach--}}

{{--                            </div><!-- End sidebar recent posts-->--}}

{{--                            <h3 class="sidebar-title">Tags</h3>--}}
{{--                            <div class="sidebar-item tags">--}}
{{--                                <ul>--}}
{{--                                    @foreach($blog_tags as $tag)--}}
{{--                                    <li><a href="{{route('blog.tag',$tag->id)}}">{{ucfirst($tag->title)}}</a></li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div><!-- End sidebar tags-->--}}

{{--                        </div><!-- End sidebar -->--}}

{{--                    </div><!-- End blog sidebar -->--}}

{{--                </div>--}}

{{--                @if(count($related_blogs)>1)--}}

{{--                <div class="realted-blogs">--}}
{{--                    <div class="section-title">--}}
{{--                        <h4 class="mt-3">Related blogs</h4>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}

{{--                        @foreach($related_blogs as $item)--}}
{{--                           @if($blog->id !=$item->id)--}}
{{--                                <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">--}}
{{--                                    <article class="entry">--}}

{{--                                        <div class="entry-img">--}}
{{--                                            <img src="{{asset($item->image_path)}}" alt="" class="img-fluid">--}}
{{--                                        </div>--}}

{{--                                        <h2 class="entry-title">--}}
{{--                                            <a href="{{route('blog.detail',$item->slug)}}">{{ucfirst($item->title)}}</a>--}}
{{--                                        </h2>--}}

{{--                                        <div class="entry-meta">--}}
{{--                                            <ul>--}}
{{--                                                <li class="d-flex align-items-center"><a href="javascript:;">Categories: @foreach($blog_categories as $cat) {{ucfirst($cat->title)}} @endforeach</a></li>--}}

{{--                                            </ul>--}}
{{--                                        </div>--}}

{{--                                        <div class="entry-content">--}}
{{--                                            {!! html_entity_decode($item->content) !!}--}}

{{--                                        </div>--}}

{{--                                    </article><!-- End blog entry -->--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endif--}}


{{--            </div>--}}
{{--        </section><!-- End Blog Single Section -->--}}


{{--    </main><!-- End #main -->--}}

<!-- ======= Header ======= -->

<main id="main">

    <section id="blog" class="blog mt-5 pt-5">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-image">
                            <img src="{{asset($blog->image_path)}}" alt="" class="img-fluid blog-single">
                        </div>

                        <h2 class="entry-title">
                            <a href="javascript:;">{{$blog->title}}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="javascript:;"><i class="icofont-user"></i> {{ucfirst($blog->posted_by)}}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="javascript:;"><time datetime="2020-01-01"><i class="icofont-clock-time"></i>  {{\Carbon\Carbon::parse($blog->created_at)->format('M d,Y')}}</time></a></li>
                            </ul>
                        </div>

                        @if($blog->quote !=null)
                        <div class="entry-content">

                            <blockquote>
                                <p>
                                    {!! nl2br($blog->quote) !!}
                                </p>
                            </blockquote>

                        </div>
                        @endif

                        <div class="entry-content">
                            {!! html_entity_decode($blog->content) !!}

                        </div>

                        <div class="entry-footer">
                            <i class="icofont-tags"></i>
                            <ul class="cats">
                                <li>Tags :</li>
                            </ul>

                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @foreach($blog->blog_tags as $tag)
                                <li><a href="javascript:;" class="text-secondary">{{ucfirst($tag->title)}}</a></li>
                                @endforeach

                            </ul>
                        </div>

                    </article><!-- End blog entry -->
                    <!-- End blog comments -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="{{route('blog.search')}}" method="get">
                                <input type="text" name="search" autocomplete="off"
                                       placeholder="Search in blog" required >
                                <button type="submit">
                                    <i class="icofont-search-1"></i>
                                </button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                @foreach($blog_categories as $cat)
                                <li><a href="{{route('blog.category',$cat->id)}}">{{ucfirst($cat->title)}} <span>({{\App\Models\BlogCategory::where('blog_id',$cat->id)->count()}})</span></a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Recent Posts</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach($recent_blogs as $blog)
                                <div class="post-item clearfix">
                                    <img src="{{asset($blog->image_path)}}" alt="">
                                    <h4><a href="{{route('blog.detail',$blog->slug)}}">{{ucfirst($blog->title)}}</a></h4>
                                    <time datetime="2020-01-01"> {{\Carbon\Carbon::parse($blog->created_at)->format('M d,Y')}}</time>
                                </div>
                            @endforeach

                        </div><!-- End sidebar recent posts-->

                        <h3 class="sidebar-title">Tags</h3>
                        <div class="sidebar-item tags">
                            <ul>
                                @foreach($blog_tags as $tag)
                                <li><a href="{{route('blog.tag',$tag->id)}}">{{ucfirst($tag->title)}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

            @if(count($related_blogs)>1)

                <div class="realted-blogs">
                    <div class="section-title">
                        <h4 class="mt-3">Related blogs</h4>
                    </div>
                    <div class="row">

                        @foreach($related_blogs as $item)
                            @if($blog->id !=$item->id)
                                <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                                    <article class="entry">

                                        <div class="entry-img">
                                            <img src="{{asset($item->image_path)}}" alt="" class="img-fluid">
                                        </div>

                                        <h2 class="entry-title">
                                            <a href="{{route('blog.detail',$item->slug)}}">{{ucfirst($item->title)}}</a>
                                        </h2>

                                        <div class="entry-meta">
                                            <ul>
                                                <li class="d-flex align-items-center"><a href="javascript:;">Categories: @foreach($blog_categories as $cat) {{ucfirst($cat->title)}} @endforeach</a></li>

                                            </ul>
                                        </div>

                                        <div class="entry-content">
                                            {!! html_entity_decode($item->content) !!}

                                        </div>

                                    </article><!-- End blog entry -->
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section><!-- End Blog Single Section -->
</main><!-- End #main -->
@endsection
@push('styles')
    <link href="{{asset('frontend/assets/css/base.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/blog.css')}}" class="">
@endpush

@push('scripts')
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
@endpush
